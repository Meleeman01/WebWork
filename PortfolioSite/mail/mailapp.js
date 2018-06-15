const express= require ('express');
const bodyParser= require('body-parser');
const expHdlBrs= require('express-handlebars');
const path=require('path');
const nodemailer= require('nodemailer');

const app = express();

//View engine Setup handlebars...

app.engine('handlebars', expHdlBrs());
app.set('view engine', 'handlebars');
//static folder
app.use('/public',express.static(path.join(__dirname,'public')));

//Body Parser Middleware
app.use(bodyParser.urlencoded({extended: false}));
app.use(bodyParser.json());




app.get('/',(req, res)=>{ 
	res.render('contact');


});

app.post('/send',(req,res)=>{
	const output = `<p>You have a new contact request</p>
	<h3>Contact Details:</h3>
	<ul>
		<li>Name: ${req.body.name}</li>
		<li>company: ${req.body.company}</li>
		<li>email: ${req.body.email}</li>
		<li>phone: ${req.body.phone}</li>
	
	</ul>
	<h3>Message:</h3>
	<p>${req.body.message}</p>

	`;
	 // create reusable transporter object using the default SMTP transport
    let transporter = nodemailer.createTransport({
       	service: 'gmail',
        auth: {
            user: 'vfpmailserver@gmail.com', // generated ethereal user
            pass: 'Eflatmajor#1' // generated ethereal password
        }
    });

    // setup email data with unicode symbols
    let mailOptions = {
        from: '"Nodemailer Contact 👻" <VFPmedia@protonmail.com>', // sender address
        to: 'meleeman01@gmail.com, VFPmedia@protonmail.com', // list of receivers
        subject: 'Node Contact Request ✔', // Subject line
        text: 'Hello world?', // plain text body
        html: output // html body
    };

    // send mail with defined transport object
    transporter.sendMail(mailOptions, (error, info) => {
        if (error) {
            return console.log(error);
        }
        console.log('Message sent: %s', info.messageId);
        // Preview only available when sending through an Ethereal account
        console.log('Preview URL: %s', nodemailer.getTestMessageUrl(info));

        // Message sent: <b658f8ca-6296-ccf4-8306-87d57a0b4321@example.com>
        // Preview URL: https://ethereal.email/message/WaQKMgKddxQDoou...


        //create confirmation message
        res.render('contact',{msg:'email has been sent :)'});
    });
});


app.listen(3000, ()=> console.log('Server Started On Port 3000...'));
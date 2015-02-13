$(document).ready(function()
{
    var template = false;

    $.get('templates/news.tmpl', function(response)
    {
        // Save the template for later
        template = Hogan.compile(response);
        loadNews();
    }, 'html')

    var news =
    [
        {
            title: 'Remember when Skype was cool?',
            author: 'rachel',
            date: 'Friday 13, 2015',
            content:
            [
                "Back in the day when Skype was still being written by the same people who made Kazaa, the internet was a pretty cool place. \
                 You could make calls to anyone, the download was only a few megabyes, and behind the scenes it was total P2P cipherpunk beauty.",
                "Now a days, we have Tox!",
                "<a href='https://tox.im/#features'><img src='img/tox-screenie.png'></a>",
                "<i class='small'>Tox is a peer to peer network for text, audio, and video calls.</i>",
                "Unlike Skype, Tox is completely <a href='https://github.com/tox'>open source</a> and already comes in a variety of clients for pretty much <a href='https://wiki.tox.im/Clients'>every platform</a>. \
                 By default your user ID is a unique cryptographic key, but you can get an easy to remember username at <a href='https://toxme.se/'>Toxme.se</a>.",
                "<h3>Wanna chat?</h3>",
                "<ul> \
                    <li>rachel@toxme.se</li> \
                    <li>haitani@toxme.se</li> \
                    <li>copt@toxme.se</li> \
                </ul>"
            ],

            tags: ['Tox', 'Privacy', 'Open Source', 'P2P']
        },

        {
            title: 'Community projects on Trello',
            author: 'rachel',
            date: 'February 5, 2015',
            content:
            [
                "<a href='https://trello.com/wetfish'><img src='img/wetfish-trello.jpg'></a>",
                "Ever wondered what's going on behind the scenes?",
                "<a href='https://trello.com/wetfish'>Trello</a> is the project management tool we use to track development on wetfish and handle requests. \
                 This week I did a bunch of reorganizing to simplify our smaller boards and showcase our most active projects.",
                "Being an open source community means we encourage everyone to participate. :D<br>Have an idea of your own? Write about it in <a href='https://trello.com/b/7uGh07wh/incubator'>the incubator</a>!",
                "<i class='small'>Tip: Get access by sending your Trello username to rachel on <a href='https://wetfish.net/irc'>IRC</a></i>"
            ],

            tags: ['Community', 'Project Management', 'News', 'Trello']
        },
    
        {
            title: 'SlapStats!',
            author: 'rachel',
            date: 'February 1, 2015',
            content:
            [
                "<a href='https://slapstats.wetfish.net/'><img src='img/slapgraph.png'></a>",
                "Checkout the newest wetfish project, <a href='https://slapstats.wetfish.net/'>slapstats</a>!",
                "It's got graphs and all sorts of buttons."
            ],
            
            tags: ['Graphs', 'Statistics', 'Projects', 'C3.js']
        }
    ];

    function loadNews()
    {
        $('section.news').html('');
        
        $.each(news, function(index, article)
        {
            var rendered = template.render(article);
            $('section.news').append(rendered);
        });
    }
});

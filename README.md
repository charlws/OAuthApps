# CHub OAuth Apps  

Developers may submit their application to this repo to get a `*.apps.chub.page` domain which is accepted by official Drivers Hub client on OAuth. Otherwise users will be required to generate an Application Token manually for security concerns.  

To submit an application, clone this repo, create a `your_app.php` under [`/apps`](/apps), declare four vars `$name`, `$description`, `$website`, `$callback_domain`, then open a pull request for us to review your application.  

When an application is accepted, it will automatically get the domain `your_app.apps.chub.page`, with the index page redirecting to the app's website, and `/info` returning a JSON response about the app.  

To do OAuth, send the user to `https://drivershub/oauth?app_id=your_app&callback_url=https://callback_domain/path`, after authorization, the user will be redirected to `https://calback_domain/path?discordid=1234567&token=xxxxxx-xxxx`.  

For example, CHub Utility Bot sends the user to `https://hub.atmvtc.com/oauth?app_id=utilbot&callback_url=https://utilbot.chub.page/atm`, after authorization, the user will be redirected to `https://utilbot.chub.page/atm?discordid=1234567&token=xxxxxx-xxxx`.  

Note that the `callback_domain` must be the same as the one in the app you submitted to this repo.  

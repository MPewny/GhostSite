# GhostSite
This PHP plugin lets You make a site (like admin panel etc) visible only for You or people You choose

## What is GhostSite for
GhostSite send to the client error header so the client can't access website. It can be very helpful with:

### Hacking scanners
some of the User-Agents of website vulnerability scanners used by hackers are know publicly. You can just block it on Your website and send an error 404 header so the scanner will be looking further. It lets You also hide Admin Panel from all of the internet users without IP that You want.

### Hackers
same as with hacking scanners but vulnerability scanners user-agents don't block browsers, so manual attempts sould be also blocked, thats why You can allow only authorized IP/UA

### Privacy on internet
we all know that some of websites are made only for few of "the chosen ones" ;) if You make a login system it might get hacked, so hiding the website is a good complement

## How to use GhostSite
[GhostSite](https://github.com/MPewny/GhostSite) is a clear PHP plugin so You dont need to install any frameworks.

### Main
above the HTML header of the site that has to be ghosted add this **as PHP code** :
...

require_once "path_of_the_GhostSite_plugin/GhostSite/func.php"
function_You_want_to_use("variables depending of function"); 

...

What You have to do in "function_You_want_to_use("variables depending of function");" is explained below.

### Each function usage

#### Manual IP Authorization

ManualIPAuth($AuthorizedIP,$error);

This function allows access **only** to the IP set in $AuthorizedIP variable, if the user that is trying to connect with this site he will see error set in the $error variable.

example
...

 //if Your ip is 129.109.48.72, set this code:
  ManualIPAuth("129.109.48.72",404);
//and if someone with IP else than 129.109.48.72 will get error 404 page not found.
...

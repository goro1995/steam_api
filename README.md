steam_api
=========
Gateway for steam_web_api


This libary/function uses to make a front- & back- end for Steam Web API.

Example if you using Localhost to make your scrpit, you cannot use a steam key (domian problem), but if you install my gateway on your hosting (copy paste and edit config.php file), and paste clinet side in your script its will be possible (becouse steam getting question form the domian and not from your localhost).

========
Example

If you not using a gateway connecion look like:

web_server => Steam WEB API => Steam Server

then answer:

Steam server => steam WEB API => web_server

So when you using my own you can get something like:

Web_server#1 ===>

Web_server#2 ===>  Gateway host(with insalled server files) ==> Steam WEB API ==> Steam Server

Web_server#3 ===>

Answer:

............................................... ===> WEB_SERVER#1
                                              
Steam Server ==> Steam WEB API ==> Gateway Host ===> WEB_SERVER#2

............................................... ===> WEB_SERVER#3

So when you using my libary its make it posible to have multiple servers thatsway its alot eseay to use it.

========

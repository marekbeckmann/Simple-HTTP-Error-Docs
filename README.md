# NGINX Error Docs

This is a simple PHP error document, that you can use to handle NGINX errors. It makes it very easy to handle all NGINX errors, with only one file. In the following readme, I also added a sample config for your convinience.

## 1. Features:

 - Handle all errors, such as 403, 404, 50X etc. 
 - Minimalistic (CSS, JS only)
 - Error Code Animation
   
Screenshot Desktop: 

![Untitled-1](https://user-images.githubusercontent.com/80179488/132218279-019f9572-ccce-45db-9cc6-d8c2336ec1b2.jpg)

## 2. Download and Installation:

Clone the GIT repository 
```
git clone https://github.com/mlhbeckmann/simple-nginx-error-docs.git
```
Copy it's content to a subdirectory of  your webdirectory, such as `errordocs`

Next, adjust your NGINX config and add the following to your VHost config

    error_page 404 /errordocs?ref=404;
    error_page 403 /errordocs?ref=403;
    error_page 500 502 503 504 /errordocs?ref=50X;

You can specify the ref part, to display any 3-digit string you want. However,  it's intended to just be the three digits of the error code. If you don't provide a Error Code, 404 is assumed


**Thank your for using this template. Feel free to leave me any feedback.**

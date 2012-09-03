# About
PHP Auto CMS is a lightweight auto formatting, auto styling, auto generating, auto everything CMS. I wrote this one day when I got tired of seeing Apache Directory Indexes every time I would create a folder that would have multiple mini sites (like a "projects" page for a website).

# Usage
To use, put index.php and style.css in the root of the folder you would like to use as your CMS view. Every other folder in that directory will now be automatically indexed for use in the CMS, for instance:

> projects
> >	-HTML

> >	-CSS

> >	-PHP


When visiting /projects, you will now see a styled page linking you to HTML, CSS, and PHP. Additionally, you can nest another copy of the CMS in any of the children folders. No coding needs to be done to display these links and they are fully styleable using style.css. Finally, you have 1 files you can place in each folder `desc.txt`. This is a simple text file that will allow you to describe the contents of the folder. 

# Issues
I wrote this very quickly many years ago. The CSS can use a lot of work. Please feel free to fork it and tweak it any way you wish. If you end up using it, let me know. I'd love to start a page of people using this project (with your agreement, of course).
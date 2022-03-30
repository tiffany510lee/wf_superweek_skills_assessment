---
jupyter:
  jupytext:
    text_representation:
      extension: .md
      format_name: markdown
      format_version: '1.2'
      jupytext_version: 1.6.0
  kernelspec:
    display_name: Python 3
    language: python
    name: python3
---

# Wells Fargo Neurodiversity Program SuperWeek Skills Assessment Questions


# What technology did you choose to complete the task, and way?


In this skills assessment, I will be using HTML, PHP, and MySQL code to add, edit, delete and view data. This kind of system is also referred to CRUD (Create, Read, Update, Delete). First, I created a new MySQL database named `intake_form`. Next, I created a `config.php` file which contains database connection code, which is used to connect to the MySQL database. This file is included in all PHP pages where database connection is necessary. To add data into database, I made a HTML form called `add.html` and any submitted form data will be handled by `add.php`. Using `add.php`, I will validate to check if the text fields and drop down options are submitted correctly. If so, they will be submitted to the database table. The data from the MySQL database is then fetched and displayed in the `index.php` file, which will be used as the homepage. This file also contains a link to add data: for each row of displayed data, there is a link to edit/delete data. When data is being added, there were two previously mentioned files that handle the added data: `add.html` and `add.php`. `edit.php` handles the editing of the project data in those two files. 

For more details about preliminary implementation, see attached Google Drive folder or GitHub link.


# What resources did you utilize?


I use JupyterHub and Kate (similar to Notepad editor on Windows) to edit code. I did some preliminary tests with my local Apache web server and Google Chrome browser. I don't have PHP and MySQL servers on my computer so I haven't tested them yet. I also used Google Drive and GitHub for file and version control management. After implementing these files, I use Git to push my files into GitHub. I used Markdown to write this document. Everything is run on my Linux PC laptop.


# Are there any additional requirements you feel would have been useful for completing the task?


It would be nice to have an actual dataset to work with and more time to populate the database and do more testing.

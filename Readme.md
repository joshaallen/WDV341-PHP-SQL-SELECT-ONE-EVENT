# **Unit-7 SQL SELECT**

## 7-2:Create selectOneEvent.php

Create a PHP page called `selectOneEvent.php`.  This page will use an SQL `SELECT` query with a `WHERE` clause to pull one event from your events table.  It will display the record in a table like format on the page.  If there is nothing in your table it will display a message for your client.

The page will do the following:

  1. Connect the page to your database using the dbConnect file.

  2. Create an SQL `SELECT` command in PDO using Prepared Statements to pull one event from your event table.

  3. Use the `WHERE` clause to access a single event from the table. For testing purposes hard code your event number into the variable. 

  4. Process the SQL command and create a result.  It will include error handling in case your SELECT fails to run properly or the table is empty.

  5. Use a PHP loop to process the record/row in the result.

  6. Format the row from the result into a table like format. You can use and HTML table or use CSS Flexbox or Grid to display a table like format.

  7. Display the final results to the client.

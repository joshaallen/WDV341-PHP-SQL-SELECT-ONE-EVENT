# **Unit-7 SQL SELECT**

## 7-1:PHP Create selectEvents.php

Create a PHP page called `selectEvents.php`.  This page will use and SQL `SELECT` query pull all of the events on your events table.  It will display them in a table on the page.  If there is nothing in your table it will display a message for your client.

The page will do the following:

  1. Connect the page to your database using the dbConnect file.

  2. Create an SQL `SELECT` command in PDO that uses Prepared Statements to pull all the events from your events table.

  3. Process the SQL command and create a result. It will include error handling in case your `SELECT` fails to run properly or the table is empty.

  4. Use a PHP loop to process each row in the result.

  5. Format each row from the result into a table like row. You can build an HTML table, or use CSS Flexbox or CSS Grid layouts to make it look like a table.
  
Display the final results to the client.


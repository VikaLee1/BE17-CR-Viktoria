<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>Add your recommendation</title>
        <style>
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }       
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2 text-center'>Add your recommendation</legend>
            <!-- to parse the info use enctype! -->
            <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <th>Name</th>
                        <td>
                            <input class='form-control' type="text" name="name" />
                        </td>
                    </tr>   
                    <tr>
                        <th>Author name or name of Director</th>
                        <td>
                            <input class='form-control' type="text" name="author_name"  />
                        </td>
                    </tr>    
                    <tr>
                        <th>Surname of an author or director</th>
                        <td>
                            <input class='form-control' type="text" name="author_surname"   />
                        </td>
                    </tr>     
                     <tr>
                        <th>Short description</th>
                        <td>
                        <!-- <textarea type="text"  rows="5"  cols="30" class='form-control' placeholder="no more than 255 characters" maxlength="255">
                        
                        </textarea> -->
                        
                        <input class='form-control' type="text" name="description"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><select name="type" class='form-control' type="text">
                            <option value="book" name="Book">Book</option>
                            <option value="dvd" name="CD">DVD</option>
                            <option value="cd" name="DVD">Audio-book</option>
                        </select></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="file" name="picture" /></td>
                    </tr>
                    <tr>
                        <td><button class='btn btn-success' type="submit">Add to recommendation list</button></td>
                        <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                    </tr>
                   

                    

                </table>
            </form>
        </fieldset>
    </body>
</html>
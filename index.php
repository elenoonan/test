<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sample Form</title>
        <style>
            div.container {
                margin: auto;
                width: 960px;
            }
            div.row{
                display:block;
                margin-top:10px;
            }
            div.label{
                padding-right:10px;
            }
            div.control{
                display: inline-block;
            }

        </style>
    </head>
    <body>

        <form action="process.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="label">
                        <label>Username</label>
                    </div>
                    <div class="control">
                        <input type="text" name="username"/>
                    </div>
                </div>

            <div class="row">
                   <div class="label">
                        <label>Password</label>
                    </div>
                    <div class="control">
                        <input type="password" id="password" name="password"/>
                    </div>
                </div>
                <div class="error">
                    <span id="passwordError"></span>
                </div>

                <div class="row">
                    <div class="label">
                        <label>Age</label>
                    </div>
                    <div class="control">
                        <input type="text" name="age"/>
                    </div>
                </div>

                <div class="row">
                    <div class="label">
                        <label>Date of birth</label>
                    </div>
                    <div class="control">
                        <input type="date" name="dob"/>
                    </div>
                </div>

                <div class="row">
                    <div class="label">
                        <label>Email</label>
                    </div>
                    <div class="control">
                        <input type="email" name="email"/>
                    </div>
                </div>

                <div class="row">
                    <div class="label">
                        <label>Website</label>
                    </div>
                    <div class="control">
                        <input type="url" name="website"/>
                    </div>
                </div>

                <div class="row">
                    <div class="label">
                        <label>Operating System</label>
                    </div>
                    <div class="control">

                        <input type="radio" name="os" value="windows"/> Windows
                        <input type="radio" name="os" value="macosx"/> Mac OS X
                        <input type="radio" name="os" value="linux"/> Linux
                    </div>
                </div>

                <div class="row">
                    <div class="label">
                        <label>Programming Languages</label>
                    </div>
                    <div class="control">

                        <input type="checkbox" name="languages[]" value="C++"/> C++
                        <input type="checkbox" name="languages[]" value="Java"/> Java
                        <input type="checkbox" name="languages[]" value="PHP"/> PHP
                    </div>
                </div>
                <!--inserting comments and profile picture boxes-->
                <div class="row">   
                    <div class="label">
                        <label for="comments">Comments</label>
                        <textarea id="comments" name="comments"></textarea>
                    </div>
                    <div class="error">
                        <span id="commentsError"></span>
                </div>
                </div>

                <div class="row">   
                    <div class="label">
                        <label for="picture">Profile Picture</label>

                        <input type="file" id="picture" name="picture"/>
                    </div>
                    <div class="error">
                        <span id="pictureError"></span>
                </div>
                </div>


                <div class="row">
                    <div class="label"></div>
                    <div class="control">
                        <input type="submit" value="Submit"/>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>


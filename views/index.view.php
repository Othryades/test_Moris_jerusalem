<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <title>Title</title>
        <link rel="stylesheet" href="/daniel/test_Moris_Iarossi//public/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>

    <body>

        <header>
                <h1>School planning</h1>
        </header>


        <div class="container">

            <h2>Basic Table</h2>

            <p>Teachers duty:</p>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Teachers</th>
                        <th>Courses</th>

                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($teachers as $teacher) : ?>
                        <tr>
                            <td>
                                <?= $teacher->teacher_name; ?>
                            </td>
                            <td>
                                <?= $teacher->course_name; ?>
                            </td>

                         </tr>
                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>


    </body>


</html>
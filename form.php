<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Questions | Online Quiz System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/form.css">
    <style type="text/css">
        body{
            width: 100%;
            background: url(image/background.jpg) no-repeat center center fixed; 
            background-size: cover;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.8);
        }
        .title1 {
            text-align: center;
            font-size: 40px;
            font-weight: bold;
            margin-top: 20px;
        }
        .form-control {
            border-radius: 20px;
            margin-bottom: 10px;
        }
        .question {
            margin-bottom: 20px;
        }
        .btn {
            border-radius: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <span class="title1">Enter Question Details</span>
                        <form class="form-horizontal" name="form" action="update.php?q=addqns&n=<?php echo @$_GET['n'];?>&eid=<?php echo @$_GET['eid'];?>&ch=4" method="POST">
                            <?php for($i=1;$i<=@$_GET['n'];$i++) { ?>
                                <div class="form-group question">
                                    <label for="qns<?php echo $i; ?>">Question <?php echo $i; ?></label>
                                    <textarea class="form-control" rows="3" name="qns<?php echo $i; ?>" placeholder="Write question number <?php echo $i; ?> here..." required></textarea>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="<?php echo $i;                                    <label for="<?php echo $i; ?>1">Option A</label>
                                    <input class="form-control" type="text" name="<?php echo $i; ?>1" placeholder="Enter option a" required>
                                </div>
                                <div class="form-group">
                                    <label for="<?php echo $i; ?>2">Option B</label>
                                    <input class="form-control" type="text" name="<?php echo $i; ?>2" placeholder="Enter option b" required>
                                </div>
                                <div class="form-group">
                                    <label for="<?php echo $i; ?>3">Option C</label>
                                    <input class="form-control" type="text" name="<?php echo $i; ?>3" placeholder="Enter option c" required>
                                </div>
                                <div class="form-group">
                                    <label for="<?php echo $i; ?>4">Option D</label>
                                    <input class="form-control" type="text" name="<?php echo $i; ?>4" placeholder="Enter option d" required>
                                </div>
                                <div class="form-group">
                                    <label for="ans<?php echo $i; ?>">Correct Answer</label>
                                    <select class="form-control" name="ans<?php echo $i; ?>" required>
                                        <option value="">Select the correct answer for question <?php echo $i; ?></option>
                                        <option value="a">Option A</option>
                                        <option value="b">Option B</option>
                                        <option value="c">Option C</option>
                                        <option value="d">Option D</option>
                                    </select>
                                </div>
                            <?php } ?>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>


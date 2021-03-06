<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\grid\GridView;
use app\models\Newsfeed;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost:8012/yii/yiiNewsFeedCRUD/frontend/web/css/style.css">
</head>


<body>


<div class="container">
    <div>
      <h2>Products :</h2>
    </div>
    <div class="col-md-12">
        <div class="mt-3">
            <a href="index.php?r=products/create" class="btn btn-primary add-new-button">Add Product <i class="fa fa-plus" aria-hidden="true"></i></a>
        </div>

      <?= GridView::widget([
				'dataProvider' => $dataProvider,
				'columns' => [
					'id',
					'name',
					'description',
					'price',
					'quantity',
                    'created_at',
                           
					[
						'class' => 'yii\grid\ActionColumn',
					],

				],
			]); ?>
      
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
    <script src="http://localhost:8012/yii/yiiNewsFeedCRUD/frontend/web/js/bootstrap.min.js"></script>
</body>

</html>

<?

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<? $form=ActiveForm::begin(); ?>
<?= $form->field($model, 'username'); ?>
<?= $form->field($model, 'password'); ?>

<?= Html::submitButton('Сохранить'); ?>






<?php
$parent = isset($category['childs']);
if(!$parent){
    $delete = '<a href="' . ADMIN . '/category/delete?id=' . $id . '" class="delete"><span class="oi oi-x text-danger"></span></a>';
}else{
    $delete = '<span class="oi oi-x"></span>';
}
?>
<p class="item-p">
    <a class="list-group-item" href="<?=ADMIN;?>/category/edit?id=<?=$id;?>"><?=$category['title'];?></a> <span><?=$delete;?></span>
</p>
<?php if($parent): ?>
    <div class="list-group">
        <?= $this->getMenuHtml($category['childs']); ?>
    </div>
<?php endif; ?>

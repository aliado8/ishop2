<option value="" class="label"><?=$this->currency['code']?>:</option>
<? foreach ($this->currencies as $key => $value):?>
    <?php if($key != $this->currency['code']):?>
        <option value="<?=$key?>"><?=$key?></option>
    <?php endif;?>
<? endforeach;?>
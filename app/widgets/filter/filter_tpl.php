<?php foreach ($this->groups as $group_id =>$group_item):?>
    <section  class="sky-form">
        <h4><?=$group_item?></h4>
        <div class="row1 scroll-pane">
            <div class="col col-4">
                <? foreach ($this->attrs[$group_id] as $attr_id => $attrs_value):?>
                    <?if(!empty($filter) && in_array($attr_id, $filter)){
                        $checked = ' checked';
                    } else {
                        $checked = NULL;
                    }?>
                    <label class="checkbox">
                        <input type="checkbox" name="checkbox" value="<?=$attr_id?>" <?=$checked?>><i></i><?=$attrs_value?>
                    </label>

                <?endforeach;?>
            </div>
        </div>
    </section>
<?php endforeach;?>
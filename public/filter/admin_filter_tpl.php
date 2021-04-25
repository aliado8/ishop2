<div class="row" id="filter">
    <div class="col-12">
        <!-- Custom Tabs -->
        <div class="card">
            <div class="card-header d-flex p-0">
                <ul class="nav nav-pills p-3">
                    <?php $i = 1; foreach($this->groups as $group_id => $group_item): ?>
                        <li class="nav-item">
                            <a class="nav-link<?php if($i == 1) echo ' active'?>" href="#tab_<?= $group_id ?>" data-toggle="tab">
                                <?= $group_item ?>
                            </a>
                        </li>
                        <?php $i++; endforeach; ?>

                </ul>
                <div class="ml-auto p-3">
                        <a href="#" id="reset-filter" class="btn btn-block btn-danger">Сброс</a>
                </div>
            </div>
            <div class="card-body">
                    <div class="tab-content">
                        <?php if(!empty($this->attrs[$group_id])): ?>
                            <?php $i = 1; foreach($this->groups as $group_id => $group_item): ?>
                                <div class="tab-pane<?php if($i == 1) echo ' active' ?>" id="tab_<?= $group_id ?>">
                                    <?php foreach($this->attrs[$group_id] as $attr_id => $value): ?>
                                        <?php
                                        if(!empty($this->filter) && in_array($attr_id, $this->filter)){
                                            $checked = ' checked';
                                        }else{
                                            $checked = null;
                                        }
                                        ?>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" name="attrs[<?= $group_id ?>]" value="<?= $attr_id ?>"<?= $checked ?>> <?= $value ?>
                                            </label>
                                        </div>
                                        <?php $i++; endforeach; ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



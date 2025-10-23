<div class="modal_head">
    <i class="icon_close" onclick="common.modal_hide()"></i>
</div>
<div class="modal_body">
    
    <h2 style="text-align: center;">Are you sure you want to delete user "<?php echo self::$_tpl_vars['user']['first_name']; ?>
 <?php echo self::$_tpl_vars['user']['last_name']; ?>
"?</h2>
    <div class="modal_controls">
        <div>
            <div class="btn_modal" onclick="common.user_delete_action(<?php echo self::$_tpl_vars['user']['id']; ?>
);">Delete</div>
        </div>
        <div>
            <div class="btn_modal light" onclick="common.modal_hide();">Cancel</div>
        </div>
    </div>
</div>
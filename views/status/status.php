<div class="status">
    <div>
        <div class="status_content">
            <a href="<?php echo $base_url; ?>/user/<?php echo $this->escape($status['user_name']); ?>"><?php echo $this->escape($status['user_name']); ?></a>
            <?php echo $this->escape($status['body']); ?>
        </div>
        <div>
            <a href="<?php echo $base_url; ?>/user/<?php echo $this->escape($status['user_name']); ?>/status/<?php echo $this->escape($status['id']); ?>">
                <?php echo $this->escape($status['created_at']); ?>
            </a>
        </div>
    </div>
    <form action="<?php echo $base_url; ?>/delete" method="post">
        <input type="hidden" name="_token" value="<?php echo $this->escape($_token); ?>">
        <input type="hidden" name="status_id" value="<?php echo $this->escape($status['id']); ?>">

        <input class="button button--delete" type="submit" value="削除する">
    </form>
</div>
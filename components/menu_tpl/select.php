<li>
    !!!!!<a class="link_st" href="">
        <?=$category['name']?>
        <?php if ( isset( $category['childs'] ) ): ?>

            <span class="badge pull-right">
                <i class="fa fa-plus"></i>
            </span>

        <?php endif;?>
    </a>

    <?php if ( isset( $category['childs'] ) ): ?>
        <ul class="lst">
            <?= $this->getMenuHtml($category['childs'])?>
        </ul>
    <?php endif;?>
</li>
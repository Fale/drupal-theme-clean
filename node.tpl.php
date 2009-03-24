<?php // $Id: node.tpl.php,v 1.1.2.2 2008/09/05 15:53:01 njt1982 Exp $ ?>
<div id="node-<?php print $node->nid; ?>" class="node<?php print $sticky ? ' sticky' : ''; print !$status ? ' node-unpublished' : ''; ?> clear-block">
  <div class="meta">
    <?php if ($submitted): ?><span class="submitted"><?php print $submitted ?></span><?php endif; ?>
    <?php if ($terms): ?><span class="terms"><?php print $terms ?></span><?php endif;?>
  </div>
  <div class="content"><?php print $content ?></div>
</div>

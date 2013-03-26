<?php

/**
 * @file
 * Render a bunch of objects in a list or grid view.
 */
?>
<div class="islandora-objects-list">
  <?php $row_field = 0; ?>
  <?php foreach($objects as $object): ?>
    <?php $first = ($row_field == 0) ? 'first' : ''; ?>
    <div class="islandora-object-list-item clearfix">
      <dl class="<?php print $object['class']; ?>">
        <dt>
          <?php print $object['image']; ?>
        </dt>
        <dd class="islandora-object <?php print $object['class']; print $first; ?>">
          <strong>
            <?php print $object['link']; ?>
          </strong>
        </dd>
        <?php if (isset($object['DC']['dc:description']['value'])): ?>
          <dd class="<?php print $object['DC']['dc:description']['class']; ?>">
            <?php print $object['DC']['dc:description']['value']; ?>
          </dd>
        <?php endif; ?>
      </dl>
    </div>
    <?php $row_field++; ?>
  <?php endforeach; ?>
</div>

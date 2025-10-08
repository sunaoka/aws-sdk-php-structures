<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DeleteLabel;

trait DeleteLabelTrait
{
    /**
     * @param DeleteLabelRequest $args
     * @return void
     */
    public function deleteLabel(DeleteLabelRequest $args)
    {
        parent::deleteLabel($args->toArray());
    }
}

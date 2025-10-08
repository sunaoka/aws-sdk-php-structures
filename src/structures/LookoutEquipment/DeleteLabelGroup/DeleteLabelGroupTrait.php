<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DeleteLabelGroup;

trait DeleteLabelGroupTrait
{
    /**
     * @param DeleteLabelGroupRequest $args
     * @return void
     */
    public function deleteLabelGroup(DeleteLabelGroupRequest $args)
    {
        parent::deleteLabelGroup($args->toArray());
    }
}

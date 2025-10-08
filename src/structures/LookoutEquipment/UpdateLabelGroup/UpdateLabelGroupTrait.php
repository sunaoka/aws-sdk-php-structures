<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\UpdateLabelGroup;

trait UpdateLabelGroupTrait
{
    /**
     * @param UpdateLabelGroupRequest $args
     * @return void
     */
    public function updateLabelGroup(UpdateLabelGroupRequest $args)
    {
        parent::updateLabelGroup($args->toArray());
    }
}

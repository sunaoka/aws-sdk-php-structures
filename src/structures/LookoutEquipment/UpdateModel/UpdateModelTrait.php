<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\UpdateModel;

trait UpdateModelTrait
{
    /**
     * @param UpdateModelRequest $args
     * @return void
     */
    public function updateModel(UpdateModelRequest $args)
    {
        parent::updateModel($args->toArray());
    }
}

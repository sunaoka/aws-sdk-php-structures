<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\DeleteSlotType;

trait DeleteSlotTypeTrait
{
    /**
     * @param DeleteSlotTypeRequest $args
     * @return void
     */
    public function deleteSlotType(DeleteSlotTypeRequest $args)
    {
        parent::deleteSlotType($args->toArray());
    }
}

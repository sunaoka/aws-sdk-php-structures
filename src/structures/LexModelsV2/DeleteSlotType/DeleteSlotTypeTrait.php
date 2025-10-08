<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteSlotType;

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

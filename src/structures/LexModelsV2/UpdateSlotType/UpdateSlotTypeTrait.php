<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateSlotType;

trait UpdateSlotTypeTrait
{
    /**
     * @param UpdateSlotTypeRequest $args
     * @return UpdateSlotTypeResponse
     */
    public function updateSlotType(UpdateSlotTypeRequest $args)
    {
        $result = parent::updateSlotType($args->toArray());
        return new UpdateSlotTypeResponse($result->toArray());
    }
}

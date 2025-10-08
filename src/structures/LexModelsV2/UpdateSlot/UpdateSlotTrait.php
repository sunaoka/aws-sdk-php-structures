<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateSlot;

trait UpdateSlotTrait
{
    /**
     * @param UpdateSlotRequest $args
     * @return UpdateSlotResponse
     */
    public function updateSlot(UpdateSlotRequest $args)
    {
        $result = parent::updateSlot($args->toArray());
        return new UpdateSlotResponse($result->toArray());
    }
}

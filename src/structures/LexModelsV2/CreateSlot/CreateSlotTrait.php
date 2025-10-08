<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateSlot;

trait CreateSlotTrait
{
    /**
     * @param CreateSlotRequest $args
     * @return CreateSlotResponse
     */
    public function createSlot(CreateSlotRequest $args)
    {
        $result = parent::createSlot($args->toArray());
        return new CreateSlotResponse($result->toArray());
    }
}

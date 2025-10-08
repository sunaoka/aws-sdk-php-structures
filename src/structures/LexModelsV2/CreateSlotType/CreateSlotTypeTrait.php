<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateSlotType;

trait CreateSlotTypeTrait
{
    /**
     * @param CreateSlotTypeRequest $args
     * @return CreateSlotTypeResponse
     */
    public function createSlotType(CreateSlotTypeRequest $args)
    {
        $result = parent::createSlotType($args->toArray());
        return new CreateSlotTypeResponse($result->toArray());
    }
}

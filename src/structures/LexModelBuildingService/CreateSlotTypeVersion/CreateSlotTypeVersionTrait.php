<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\CreateSlotTypeVersion;

trait CreateSlotTypeVersionTrait
{
    /**
     * @param CreateSlotTypeVersionRequest $args
     * @return CreateSlotTypeVersionResponse
     */
    public function createSlotTypeVersion(CreateSlotTypeVersionRequest $args)
    {
        $result = parent::createSlotTypeVersion($args->toArray());
        return new CreateSlotTypeVersionResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetSlotType;

trait GetSlotTypeTrait
{
    /**
     * @param GetSlotTypeRequest $args
     * @return GetSlotTypeResponse
     */
    public function getSlotType(GetSlotTypeRequest $args)
    {
        $result = parent::getSlotType($args->toArray());
        return new GetSlotTypeResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetSlotTypes;

trait GetSlotTypesTrait
{
    /**
     * @param GetSlotTypesRequest $args
     * @return GetSlotTypesResponse
     */
    public function getSlotTypes(GetSlotTypesRequest $args)
    {
        $result = parent::getSlotTypes($args->toArray());
        return new GetSlotTypesResponse($result->toArray());
    }
}

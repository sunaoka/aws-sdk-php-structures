<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBuiltinSlotTypes;

trait GetBuiltinSlotTypesTrait
{
    /**
     * @param GetBuiltinSlotTypesRequest $args
     * @return GetBuiltinSlotTypesResponse
     */
    public function getBuiltinSlotTypes(GetBuiltinSlotTypesRequest $args)
    {
        $result = parent::getBuiltinSlotTypes($args->toArray());
        return new GetBuiltinSlotTypesResponse($result->toArray());
    }
}

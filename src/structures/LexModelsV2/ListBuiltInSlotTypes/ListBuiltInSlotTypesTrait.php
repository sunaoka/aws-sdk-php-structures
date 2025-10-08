<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBuiltInSlotTypes;

trait ListBuiltInSlotTypesTrait
{
    /**
     * @param ListBuiltInSlotTypesRequest $args
     * @return ListBuiltInSlotTypesResponse
     */
    public function listBuiltInSlotTypes(ListBuiltInSlotTypesRequest $args)
    {
        $result = parent::listBuiltInSlotTypes($args->toArray());
        return new ListBuiltInSlotTypesResponse($result->toArray());
    }
}

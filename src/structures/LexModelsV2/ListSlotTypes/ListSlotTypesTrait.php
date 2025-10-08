<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSlotTypes;

trait ListSlotTypesTrait
{
    /**
     * @param ListSlotTypesRequest $args
     * @return ListSlotTypesResponse
     */
    public function listSlotTypes(ListSlotTypesRequest $args)
    {
        $result = parent::listSlotTypes($args->toArray());
        return new ListSlotTypesResponse($result->toArray());
    }
}

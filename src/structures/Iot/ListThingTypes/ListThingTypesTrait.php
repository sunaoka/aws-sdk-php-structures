<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingTypes;

trait ListThingTypesTrait
{
    /**
     * @param ListThingTypesRequest $args
     * @return ListThingTypesResponse
     */
    public function listThingTypes(ListThingTypesRequest $args)
    {
        $result = parent::listThingTypes($args->toArray());
        return new ListThingTypesResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\RAM\ListResourceTypes;

trait ListResourceTypesTrait
{
    /**
     * @param ListResourceTypesRequest $args
     * @return ListResourceTypesResponse
     */
    public function listResourceTypes(ListResourceTypesRequest $args)
    {
        $result = parent::listResourceTypes($args->toArray());
        return new ListResourceTypesResponse($result->toArray());
    }
}

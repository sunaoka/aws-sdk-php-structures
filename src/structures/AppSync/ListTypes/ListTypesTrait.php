<?php

namespace Sunaoka\Aws\Structures\AppSync\ListTypes;

trait ListTypesTrait
{
    /**
     * @param ListTypesRequest $args
     * @return ListTypesResponse
     */
    public function listTypes(ListTypesRequest $args)
    {
        $result = parent::listTypes($args->toArray());
        return new ListTypesResponse($result->toArray());
    }
}

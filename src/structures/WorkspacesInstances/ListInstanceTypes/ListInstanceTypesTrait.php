<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\ListInstanceTypes;

trait ListInstanceTypesTrait
{
    /**
     * @param ListInstanceTypesRequest $args
     * @return ListInstanceTypesResponse
     */
    public function listInstanceTypes(ListInstanceTypesRequest $args)
    {
        $result = parent::listInstanceTypes($args->toArray());
        return new ListInstanceTypesResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListOperations;

trait ListOperationsTrait
{
    /**
     * @param ListOperationsRequest $args
     * @return ListOperationsResponse
     */
    public function listOperations(ListOperationsRequest $args)
    {
        $result = parent::listOperations($args->toArray());
        return new ListOperationsResponse($result->toArray());
    }
}

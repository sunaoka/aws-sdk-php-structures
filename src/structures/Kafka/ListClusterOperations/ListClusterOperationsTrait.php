<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusterOperations;

trait ListClusterOperationsTrait
{
    /**
     * @param ListClusterOperationsRequest $args
     * @return ListClusterOperationsResponse
     */
    public function listClusterOperations(ListClusterOperationsRequest $args)
    {
        $result = parent::listClusterOperations($args->toArray());
        return new ListClusterOperationsResponse($result->toArray());
    }
}

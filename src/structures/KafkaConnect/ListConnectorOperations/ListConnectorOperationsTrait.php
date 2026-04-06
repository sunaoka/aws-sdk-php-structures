<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListConnectorOperations;

trait ListConnectorOperationsTrait
{
    /**
     * @param ListConnectorOperationsRequest $args
     * @return ListConnectorOperationsResponse
     */
    public function listConnectorOperations(ListConnectorOperationsRequest $args)
    {
        $result = parent::listConnectorOperations($args->toArray());
        return new ListConnectorOperationsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListBulkOperations;

trait ListBulkOperationsTrait
{
    /**
     * @param ListBulkOperationsRequest $args
     * @return ListBulkOperationsResponse
     */
    public function listBulkOperations(ListBulkOperationsRequest $args)
    {
        $result = parent::listBulkOperations($args->toArray());
        return new ListBulkOperationsResponse($result->toArray());
    }
}

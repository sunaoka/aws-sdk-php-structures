<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ListApplicationOperations;

trait ListApplicationOperationsTrait
{
    /**
     * @param ListApplicationOperationsRequest $args
     * @return ListApplicationOperationsResponse
     */
    public function listApplicationOperations(ListApplicationOperationsRequest $args)
    {
        $result = parent::listApplicationOperations($args->toArray());
        return new ListApplicationOperationsResponse($result->toArray());
    }
}

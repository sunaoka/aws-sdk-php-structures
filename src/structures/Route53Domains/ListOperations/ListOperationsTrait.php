<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ListOperations;

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

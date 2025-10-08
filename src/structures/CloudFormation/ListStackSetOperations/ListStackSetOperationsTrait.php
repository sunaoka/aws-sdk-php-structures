<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSetOperations;

trait ListStackSetOperationsTrait
{
    /**
     * @param ListStackSetOperationsRequest $args
     * @return ListStackSetOperationsResponse
     */
    public function listStackSetOperations(ListStackSetOperationsRequest $args)
    {
        $result = parent::listStackSetOperations($args->toArray());
        return new ListStackSetOperationsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSetOperationResults;

trait ListStackSetOperationResultsTrait
{
    /**
     * @param ListStackSetOperationResultsRequest $args
     * @return ListStackSetOperationResultsResponse
     */
    public function listStackSetOperationResults(ListStackSetOperationResultsRequest $args)
    {
        $result = parent::listStackSetOperationResults($args->toArray());
        return new ListStackSetOperationResultsResponse($result->toArray());
    }
}

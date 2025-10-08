<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListFlowOperationResults;

trait ListFlowOperationResultsTrait
{
    /**
     * @param ListFlowOperationResultsRequest $args
     * @return ListFlowOperationResultsResponse
     */
    public function listFlowOperationResults(ListFlowOperationResultsRequest $args)
    {
        $result = parent::listFlowOperationResults($args->toArray());
        return new ListFlowOperationResultsResponse($result->toArray());
    }
}

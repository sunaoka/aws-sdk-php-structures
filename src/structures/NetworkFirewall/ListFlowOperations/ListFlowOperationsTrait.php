<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListFlowOperations;

trait ListFlowOperationsTrait
{
    /**
     * @param ListFlowOperationsRequest $args
     * @return ListFlowOperationsResponse
     */
    public function listFlowOperations(ListFlowOperationsRequest $args)
    {
        $result = parent::listFlowOperations($args->toArray());
        return new ListFlowOperationsResponse($result->toArray());
    }
}

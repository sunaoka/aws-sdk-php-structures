<?php

namespace Sunaoka\Aws\Structures\Appflow\CancelFlowExecutions;

trait CancelFlowExecutionsTrait
{
    /**
     * @param CancelFlowExecutionsRequest $args
     * @return CancelFlowExecutionsResponse
     */
    public function cancelFlowExecutions(CancelFlowExecutionsRequest $args)
    {
        $result = parent::cancelFlowExecutions($args->toArray());
        return new CancelFlowExecutionsResponse($result->toArray());
    }
}

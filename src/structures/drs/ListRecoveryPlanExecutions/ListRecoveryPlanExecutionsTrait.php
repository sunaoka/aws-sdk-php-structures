<?php

namespace Sunaoka\Aws\Structures\drs\ListRecoveryPlanExecutions;

trait ListRecoveryPlanExecutionsTrait
{
    /**
     * @param ListRecoveryPlanExecutionsRequest $args
     * @return ListRecoveryPlanExecutionsResponse
     */
    public function listRecoveryPlanExecutions(ListRecoveryPlanExecutionsRequest $args)
    {
        $result = parent::listRecoveryPlanExecutions($args->toArray());
        return new ListRecoveryPlanExecutionsResponse($result->toArray());
    }
}

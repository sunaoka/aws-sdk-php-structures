<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListMonitoringExecutions;

trait ListMonitoringExecutionsTrait
{
    /**
     * @param ListMonitoringExecutionsRequest $args
     * @return ListMonitoringExecutionsResponse
     */
    public function listMonitoringExecutions(ListMonitoringExecutionsRequest $args)
    {
        $result = parent::listMonitoringExecutions($args->toArray());
        return new ListMonitoringExecutionsResponse($result->toArray());
    }
}

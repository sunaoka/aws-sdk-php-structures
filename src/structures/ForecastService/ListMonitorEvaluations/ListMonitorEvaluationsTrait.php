<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListMonitorEvaluations;

trait ListMonitorEvaluationsTrait
{
    /**
     * @param ListMonitorEvaluationsRequest $args
     * @return ListMonitorEvaluationsResponse
     */
    public function listMonitorEvaluations(ListMonitorEvaluationsRequest $args)
    {
        $result = parent::listMonitorEvaluations($args->toArray());
        return new ListMonitorEvaluationsResponse($result->toArray());
    }
}

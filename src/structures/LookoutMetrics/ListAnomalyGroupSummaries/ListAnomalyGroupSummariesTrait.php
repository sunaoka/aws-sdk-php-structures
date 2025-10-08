<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAnomalyGroupSummaries;

trait ListAnomalyGroupSummariesTrait
{
    /**
     * @param ListAnomalyGroupSummariesRequest $args
     * @return ListAnomalyGroupSummariesResponse
     */
    public function listAnomalyGroupSummaries(ListAnomalyGroupSummariesRequest $args)
    {
        $result = parent::listAnomalyGroupSummaries($args->toArray());
        return new ListAnomalyGroupSummariesResponse($result->toArray());
    }
}

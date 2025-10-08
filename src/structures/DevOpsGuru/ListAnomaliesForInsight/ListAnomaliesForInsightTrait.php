<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomaliesForInsight;

trait ListAnomaliesForInsightTrait
{
    /**
     * @param ListAnomaliesForInsightRequest $args
     * @return ListAnomaliesForInsightResponse
     */
    public function listAnomaliesForInsight(ListAnomaliesForInsightRequest $args)
    {
        $result = parent::listAnomaliesForInsight($args->toArray());
        return new ListAnomaliesForInsightResponse($result->toArray());
    }
}

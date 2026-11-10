<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityEvaluationConfigs;

trait ListDataQualityEvaluationConfigsTrait
{
    /**
     * @param ListDataQualityEvaluationConfigsRequest $args
     * @return ListDataQualityEvaluationConfigsResponse
     */
    public function listDataQualityEvaluationConfigs(ListDataQualityEvaluationConfigsRequest $args)
    {
        $result = parent::listDataQualityEvaluationConfigs($args->toArray());
        return new ListDataQualityEvaluationConfigsResponse($result->toArray());
    }
}

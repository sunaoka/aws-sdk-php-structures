<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityEvaluationConfig;

trait GetDataQualityEvaluationConfigTrait
{
    /**
     * @param GetDataQualityEvaluationConfigRequest $args
     * @return GetDataQualityEvaluationConfigResponse
     */
    public function getDataQualityEvaluationConfig(GetDataQualityEvaluationConfigRequest $args)
    {
        $result = parent::getDataQualityEvaluationConfig($args->toArray());
        return new GetDataQualityEvaluationConfigResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Glue\CreateDataQualityEvaluationConfig;

trait CreateDataQualityEvaluationConfigTrait
{
    /**
     * @param CreateDataQualityEvaluationConfigRequest $args
     * @return CreateDataQualityEvaluationConfigResponse
     */
    public function createDataQualityEvaluationConfig(CreateDataQualityEvaluationConfigRequest $args)
    {
        $result = parent::createDataQualityEvaluationConfig($args->toArray());
        return new CreateDataQualityEvaluationConfigResponse($result->toArray());
    }
}

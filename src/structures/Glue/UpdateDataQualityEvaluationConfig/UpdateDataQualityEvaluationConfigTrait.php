<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateDataQualityEvaluationConfig;

trait UpdateDataQualityEvaluationConfigTrait
{
    /**
     * @param UpdateDataQualityEvaluationConfigRequest $args
     * @return UpdateDataQualityEvaluationConfigResponse
     */
    public function updateDataQualityEvaluationConfig(UpdateDataQualityEvaluationConfigRequest $args)
    {
        $result = parent::updateDataQualityEvaluationConfig($args->toArray());
        return new UpdateDataQualityEvaluationConfigResponse($result->toArray());
    }
}

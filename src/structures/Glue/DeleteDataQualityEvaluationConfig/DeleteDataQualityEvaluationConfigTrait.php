<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteDataQualityEvaluationConfig;

trait DeleteDataQualityEvaluationConfigTrait
{
    /**
     * @param DeleteDataQualityEvaluationConfigRequest $args
     * @return DeleteDataQualityEvaluationConfigResponse
     */
    public function deleteDataQualityEvaluationConfig(DeleteDataQualityEvaluationConfigRequest $args)
    {
        $result = parent::deleteDataQualityEvaluationConfig($args->toArray());
        return new DeleteDataQualityEvaluationConfigResponse($result->toArray());
    }
}

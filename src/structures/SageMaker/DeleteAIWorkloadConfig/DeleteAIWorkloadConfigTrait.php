<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteAIWorkloadConfig;

trait DeleteAIWorkloadConfigTrait
{
    /**
     * @param DeleteAIWorkloadConfigRequest $args
     * @return DeleteAIWorkloadConfigResponse
     */
    public function deleteAIWorkloadConfig(DeleteAIWorkloadConfigRequest $args)
    {
        $result = parent::deleteAIWorkloadConfig($args->toArray());
        return new DeleteAIWorkloadConfigResponse($result->toArray());
    }
}

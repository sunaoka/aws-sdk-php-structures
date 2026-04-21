<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAIWorkloadConfig;

trait CreateAIWorkloadConfigTrait
{
    /**
     * @param CreateAIWorkloadConfigRequest $args
     * @return CreateAIWorkloadConfigResponse
     */
    public function createAIWorkloadConfig(CreateAIWorkloadConfigRequest $args)
    {
        $result = parent::createAIWorkloadConfig($args->toArray());
        return new CreateAIWorkloadConfigResponse($result->toArray());
    }
}

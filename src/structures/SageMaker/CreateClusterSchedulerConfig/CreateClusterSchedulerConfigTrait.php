<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateClusterSchedulerConfig;

trait CreateClusterSchedulerConfigTrait
{
    /**
     * @param CreateClusterSchedulerConfigRequest $args
     * @return CreateClusterSchedulerConfigResponse
     */
    public function createClusterSchedulerConfig(CreateClusterSchedulerConfigRequest $args)
    {
        $result = parent::createClusterSchedulerConfig($args->toArray());
        return new CreateClusterSchedulerConfigResponse($result->toArray());
    }
}

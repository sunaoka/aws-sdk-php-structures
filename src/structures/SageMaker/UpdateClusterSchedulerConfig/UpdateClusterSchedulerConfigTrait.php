<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateClusterSchedulerConfig;

trait UpdateClusterSchedulerConfigTrait
{
    /**
     * @param UpdateClusterSchedulerConfigRequest $args
     * @return UpdateClusterSchedulerConfigResponse
     */
    public function updateClusterSchedulerConfig(UpdateClusterSchedulerConfigRequest $args)
    {
        $result = parent::updateClusterSchedulerConfig($args->toArray());
        return new UpdateClusterSchedulerConfigResponse($result->toArray());
    }
}

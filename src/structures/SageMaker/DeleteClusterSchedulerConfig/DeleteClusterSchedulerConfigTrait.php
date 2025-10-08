<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteClusterSchedulerConfig;

trait DeleteClusterSchedulerConfigTrait
{
    /**
     * @param DeleteClusterSchedulerConfigRequest $args
     * @return void
     */
    public function deleteClusterSchedulerConfig(DeleteClusterSchedulerConfigRequest $args)
    {
        parent::deleteClusterSchedulerConfig($args->toArray());
    }
}

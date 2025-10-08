<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListClusterSchedulerConfigs;

trait ListClusterSchedulerConfigsTrait
{
    /**
     * @param ListClusterSchedulerConfigsRequest $args
     * @return ListClusterSchedulerConfigsResponse
     */
    public function listClusterSchedulerConfigs(ListClusterSchedulerConfigsRequest $args)
    {
        $result = parent::listClusterSchedulerConfigs($args->toArray());
        return new ListClusterSchedulerConfigsResponse($result->toArray());
    }
}

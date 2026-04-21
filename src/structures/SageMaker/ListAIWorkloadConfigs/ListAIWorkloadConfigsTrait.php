<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAIWorkloadConfigs;

trait ListAIWorkloadConfigsTrait
{
    /**
     * @param ListAIWorkloadConfigsRequest $args
     * @return ListAIWorkloadConfigsResponse
     */
    public function listAIWorkloadConfigs(ListAIWorkloadConfigsRequest $args)
    {
        $result = parent::listAIWorkloadConfigs($args->toArray());
        return new ListAIWorkloadConfigsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetProvisionedModelThroughput;

trait GetProvisionedModelThroughputTrait
{
    /**
     * @param GetProvisionedModelThroughputRequest $args
     * @return GetProvisionedModelThroughputResponse
     */
    public function getProvisionedModelThroughput(GetProvisionedModelThroughputRequest $args)
    {
        $result = parent::getProvisionedModelThroughput($args->toArray());
        return new GetProvisionedModelThroughputResponse($result->toArray());
    }
}

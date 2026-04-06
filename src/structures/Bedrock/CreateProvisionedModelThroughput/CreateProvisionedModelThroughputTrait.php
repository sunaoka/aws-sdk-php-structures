<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateProvisionedModelThroughput;

trait CreateProvisionedModelThroughputTrait
{
    /**
     * @param CreateProvisionedModelThroughputRequest $args
     * @return CreateProvisionedModelThroughputResponse
     */
    public function createProvisionedModelThroughput(CreateProvisionedModelThroughputRequest $args)
    {
        $result = parent::createProvisionedModelThroughput($args->toArray());
        return new CreateProvisionedModelThroughputResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteProvisionedModelThroughput;

trait DeleteProvisionedModelThroughputTrait
{
    /**
     * @param DeleteProvisionedModelThroughputRequest $args
     * @return DeleteProvisionedModelThroughputResponse
     */
    public function deleteProvisionedModelThroughput(DeleteProvisionedModelThroughputRequest $args)
    {
        $result = parent::deleteProvisionedModelThroughput($args->toArray());
        return new DeleteProvisionedModelThroughputResponse($result->toArray());
    }
}

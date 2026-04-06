<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateProvisionedModelThroughput;

trait UpdateProvisionedModelThroughputTrait
{
    /**
     * @param UpdateProvisionedModelThroughputRequest $args
     * @return UpdateProvisionedModelThroughputResponse
     */
    public function updateProvisionedModelThroughput(UpdateProvisionedModelThroughputRequest $args)
    {
        $result = parent::updateProvisionedModelThroughput($args->toArray());
        return new UpdateProvisionedModelThroughputResponse($result->toArray());
    }
}

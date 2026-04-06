<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListProvisionedModelThroughputs;

trait ListProvisionedModelThroughputsTrait
{
    /**
     * @param ListProvisionedModelThroughputsRequest $args
     * @return ListProvisionedModelThroughputsResponse
     */
    public function listProvisionedModelThroughputs(ListProvisionedModelThroughputsRequest $args)
    {
        $result = parent::listProvisionedModelThroughputs($args->toArray());
        return new ListProvisionedModelThroughputsResponse($result->toArray());
    }
}

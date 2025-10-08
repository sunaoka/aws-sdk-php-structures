<?php

namespace Sunaoka\Aws\Structures\Proton\ListServicePipelineOutputs;

trait ListServicePipelineOutputsTrait
{
    /**
     * @param ListServicePipelineOutputsRequest $args
     * @return ListServicePipelineOutputsResponse
     */
    public function listServicePipelineOutputs(ListServicePipelineOutputsRequest $args)
    {
        $result = parent::listServicePipelineOutputs($args->toArray());
        return new ListServicePipelineOutputsResponse($result->toArray());
    }
}

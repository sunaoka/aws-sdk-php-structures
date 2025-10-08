<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState;

trait GetPipelineStateTrait
{
    /**
     * @param GetPipelineStateRequest $args
     * @return GetPipelineStateResponse
     */
    public function getPipelineState(GetPipelineStateRequest $args)
    {
        $result = parent::getPipelineState($args->toArray());
        return new GetPipelineStateResponse($result->toArray());
    }
}

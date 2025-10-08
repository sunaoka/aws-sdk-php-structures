<?php

namespace Sunaoka\Aws\Structures\OSIS\GetPipelineChangeProgress;

trait GetPipelineChangeProgressTrait
{
    /**
     * @param GetPipelineChangeProgressRequest $args
     * @return GetPipelineChangeProgressResponse
     */
    public function getPipelineChangeProgress(GetPipelineChangeProgressRequest $args)
    {
        $result = parent::getPipelineChangeProgress($args->toArray());
        return new GetPipelineChangeProgressResponse($result->toArray());
    }
}

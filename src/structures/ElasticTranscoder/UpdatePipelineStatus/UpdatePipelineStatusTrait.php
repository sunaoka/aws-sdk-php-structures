<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\UpdatePipelineStatus;

trait UpdatePipelineStatusTrait
{
    /**
     * @param UpdatePipelineStatusRequest $args
     * @return UpdatePipelineStatusResponse
     */
    public function updatePipelineStatus(UpdatePipelineStatusRequest $args)
    {
        $result = parent::updatePipelineStatus($args->toArray());
        return new UpdatePipelineStatusResponse($result->toArray());
    }
}

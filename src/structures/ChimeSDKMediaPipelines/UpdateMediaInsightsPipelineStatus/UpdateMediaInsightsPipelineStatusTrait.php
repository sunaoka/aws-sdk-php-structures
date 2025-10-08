<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\UpdateMediaInsightsPipelineStatus;

trait UpdateMediaInsightsPipelineStatusTrait
{
    /**
     * @param UpdateMediaInsightsPipelineStatusRequest $args
     * @return void
     */
    public function updateMediaInsightsPipelineStatus(UpdateMediaInsightsPipelineStatusRequest $args)
    {
        parent::updateMediaInsightsPipelineStatus($args->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdatePipeline;

trait UpdatePipelineTrait
{
    /**
     * @param UpdatePipelineRequest $args
     * @return void
     */
    public function updatePipeline(UpdatePipelineRequest $args)
    {
        parent::updatePipeline($args->toArray());
    }
}

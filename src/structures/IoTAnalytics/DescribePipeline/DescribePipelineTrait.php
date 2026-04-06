<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribePipeline;

trait DescribePipelineTrait
{
    /**
     * @param DescribePipelineRequest $args
     * @return DescribePipelineResponse
     */
    public function describePipeline(DescribePipelineRequest $args)
    {
        $result = parent::describePipeline($args->toArray());
        return new DescribePipelineResponse($result->toArray());
    }
}

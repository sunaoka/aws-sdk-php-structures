<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListJobsByPipeline;

trait ListJobsByPipelineTrait
{
    /**
     * @param ListJobsByPipelineRequest $args
     * @return ListJobsByPipelineResponse
     */
    public function listJobsByPipeline(ListJobsByPipelineRequest $args)
    {
        $result = parent::listJobsByPipeline($args->toArray());
        return new ListJobsByPipelineResponse($result->toArray());
    }
}

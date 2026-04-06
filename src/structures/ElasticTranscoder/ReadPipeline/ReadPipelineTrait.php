<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ReadPipeline;

trait ReadPipelineTrait
{
    /**
     * @param ReadPipelineRequest $args
     * @return ReadPipelineResponse
     */
    public function readPipeline(ReadPipelineRequest $args)
    {
        $result = parent::readPipeline($args->toArray());
        return new ReadPipelineResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\SagemakerJobRuntime\SampleWithResponseStream;

trait SampleWithResponseStreamTrait
{
    /**
     * @param SampleWithResponseStreamRequest $args
     * @return SampleWithResponseStreamResponse
     */
    public function sampleWithResponseStream(SampleWithResponseStreamRequest $args)
    {
        $result = parent::sampleWithResponseStream($args->toArray());
        return new SampleWithResponseStreamResponse($result->toArray());
    }
}

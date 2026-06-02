<?php

namespace Sunaoka\Aws\Structures\SagemakerJobRuntime\Sample;

trait SampleTrait
{
    /**
     * @param SampleRequest $args
     * @return SampleResponse
     */
    public function sample(SampleRequest $args)
    {
        $result = parent::sample($args->toArray());
        return new SampleResponse($result->toArray());
    }
}

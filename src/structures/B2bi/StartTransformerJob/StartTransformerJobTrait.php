<?php

namespace Sunaoka\Aws\Structures\B2bi\StartTransformerJob;

trait StartTransformerJobTrait
{
    /**
     * @param StartTransformerJobRequest $args
     * @return StartTransformerJobResponse
     */
    public function startTransformerJob(StartTransformerJobRequest $args)
    {
        $result = parent::startTransformerJob($args->toArray());
        return new StartTransformerJobResponse($result->toArray());
    }
}

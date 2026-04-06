<?php

namespace Sunaoka\Aws\Structures\Neptunedata\StartMLModelTransformJob;

trait StartMLModelTransformJobTrait
{
    /**
     * @param StartMLModelTransformJobRequest $args
     * @return StartMLModelTransformJobResponse
     */
    public function startMLModelTransformJob(StartMLModelTransformJobRequest $args)
    {
        $result = parent::startMLModelTransformJob($args->toArray());
        return new StartMLModelTransformJobResponse($result->toArray());
    }
}

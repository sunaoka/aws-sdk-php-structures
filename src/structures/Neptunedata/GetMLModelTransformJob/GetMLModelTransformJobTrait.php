<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetMLModelTransformJob;

trait GetMLModelTransformJobTrait
{
    /**
     * @param GetMLModelTransformJobRequest $args
     * @return GetMLModelTransformJobResponse
     */
    public function getMLModelTransformJob(GetMLModelTransformJobRequest $args)
    {
        $result = parent::getMLModelTransformJob($args->toArray());
        return new GetMLModelTransformJobResponse($result->toArray());
    }
}

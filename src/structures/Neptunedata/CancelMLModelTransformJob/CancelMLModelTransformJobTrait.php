<?php

namespace Sunaoka\Aws\Structures\Neptunedata\CancelMLModelTransformJob;

trait CancelMLModelTransformJobTrait
{
    /**
     * @param CancelMLModelTransformJobRequest $args
     * @return CancelMLModelTransformJobResponse
     */
    public function cancelMLModelTransformJob(CancelMLModelTransformJobRequest $args)
    {
        $result = parent::cancelMLModelTransformJob($args->toArray());
        return new CancelMLModelTransformJobResponse($result->toArray());
    }
}

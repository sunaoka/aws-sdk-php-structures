<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CancelWorldGenerationJob;

trait CancelWorldGenerationJobTrait
{
    /**
     * @param CancelWorldGenerationJobRequest $args
     * @return CancelWorldGenerationJobResponse
     */
    public function cancelWorldGenerationJob(CancelWorldGenerationJobRequest $args)
    {
        $result = parent::cancelWorldGenerationJob($args->toArray());
        return new CancelWorldGenerationJobResponse($result->toArray());
    }
}

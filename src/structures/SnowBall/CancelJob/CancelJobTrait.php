<?php

namespace Sunaoka\Aws\Structures\SnowBall\CancelJob;

trait CancelJobTrait
{
    /**
     * @param CancelJobRequest $args
     * @return CancelJobResponse
     */
    public function cancelJob(CancelJobRequest $args)
    {
        $result = parent::cancelJob($args->toArray());
        return new CancelJobResponse($result->toArray());
    }
}

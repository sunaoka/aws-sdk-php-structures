<?php

namespace Sunaoka\Aws\Structures\Neptunedata\CancelLoaderJob;

trait CancelLoaderJobTrait
{
    /**
     * @param CancelLoaderJobRequest $args
     * @return CancelLoaderJobResponse
     */
    public function cancelLoaderJob(CancelLoaderJobRequest $args)
    {
        $result = parent::cancelLoaderJob($args->toArray());
        return new CancelLoaderJobResponse($result->toArray());
    }
}

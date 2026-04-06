<?php

namespace Sunaoka\Aws\Structures\Neptunedata\StartLoaderJob;

trait StartLoaderJobTrait
{
    /**
     * @param StartLoaderJobRequest $args
     * @return StartLoaderJobResponse
     */
    public function startLoaderJob(StartLoaderJobRequest $args)
    {
        $result = parent::startLoaderJob($args->toArray());
        return new StartLoaderJobResponse($result->toArray());
    }
}

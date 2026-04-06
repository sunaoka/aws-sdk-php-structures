<?php

namespace Sunaoka\Aws\Structures\GameSparks\StartGeneratedCodeJob;

trait StartGeneratedCodeJobTrait
{
    /**
     * @param StartGeneratedCodeJobRequest $args
     * @return StartGeneratedCodeJobResponse
     */
    public function startGeneratedCodeJob(StartGeneratedCodeJobRequest $args)
    {
        $result = parent::startGeneratedCodeJob($args->toArray());
        return new StartGeneratedCodeJobResponse($result->toArray());
    }
}

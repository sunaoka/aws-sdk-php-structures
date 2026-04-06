<?php

namespace Sunaoka\Aws\Structures\GameSparks\GetGeneratedCodeJob;

trait GetGeneratedCodeJobTrait
{
    /**
     * @param GetGeneratedCodeJobRequest $args
     * @return GetGeneratedCodeJobResponse
     */
    public function getGeneratedCodeJob(GetGeneratedCodeJobRequest $args)
    {
        $result = parent::getGeneratedCodeJob($args->toArray());
        return new GetGeneratedCodeJobResponse($result->toArray());
    }
}

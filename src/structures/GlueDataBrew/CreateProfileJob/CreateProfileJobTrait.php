<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateProfileJob;

trait CreateProfileJobTrait
{
    /**
     * @param CreateProfileJobRequest $args
     * @return CreateProfileJobResponse
     */
    public function createProfileJob(CreateProfileJobRequest $args)
    {
        $result = parent::createProfileJob($args->toArray());
        return new CreateProfileJobResponse($result->toArray());
    }
}

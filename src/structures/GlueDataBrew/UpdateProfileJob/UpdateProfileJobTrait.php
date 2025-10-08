<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateProfileJob;

trait UpdateProfileJobTrait
{
    /**
     * @param UpdateProfileJobRequest $args
     * @return UpdateProfileJobResponse
     */
    public function updateProfileJob(UpdateProfileJobRequest $args)
    {
        $result = parent::updateProfileJob($args->toArray());
        return new UpdateProfileJobResponse($result->toArray());
    }
}

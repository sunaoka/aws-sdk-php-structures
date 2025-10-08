<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateJob;

trait UpdateJobTrait
{
    /**
     * @param UpdateJobRequest $args
     * @return UpdateJobResponse
     */
    public function updateJob(UpdateJobRequest $args)
    {
        $result = parent::updateJob($args->toArray());
        return new UpdateJobResponse($result->toArray());
    }
}

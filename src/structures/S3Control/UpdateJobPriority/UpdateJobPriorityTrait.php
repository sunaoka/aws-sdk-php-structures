<?php

namespace Sunaoka\Aws\Structures\S3Control\UpdateJobPriority;

trait UpdateJobPriorityTrait
{
    /**
     * @param UpdateJobPriorityRequest $args
     * @return UpdateJobPriorityResponse
     */
    public function updateJobPriority(UpdateJobPriorityRequest $args)
    {
        $result = parent::updateJobPriority($args->toArray());
        return new UpdateJobPriorityResponse($result->toArray());
    }
}

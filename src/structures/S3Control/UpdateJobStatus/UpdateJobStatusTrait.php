<?php

namespace Sunaoka\Aws\Structures\S3Control\UpdateJobStatus;

trait UpdateJobStatusTrait
{
    /**
     * @param UpdateJobStatusRequest $args
     * @return UpdateJobStatusResponse
     */
    public function updateJobStatus(UpdateJobStatusRequest $args)
    {
        $result = parent::updateJobStatus($args->toArray());
        return new UpdateJobStatusResponse($result->toArray());
    }
}

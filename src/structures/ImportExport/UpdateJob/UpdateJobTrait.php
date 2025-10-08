<?php

namespace Sunaoka\Aws\Structures\ImportExport\UpdateJob;

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

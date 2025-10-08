<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateDataDeletionJob;

trait CreateDataDeletionJobTrait
{
    /**
     * @param CreateDataDeletionJobRequest $args
     * @return CreateDataDeletionJobResponse
     */
    public function createDataDeletionJob(CreateDataDeletionJobRequest $args)
    {
        $result = parent::createDataDeletionJob($args->toArray());
        return new CreateDataDeletionJobResponse($result->toArray());
    }
}

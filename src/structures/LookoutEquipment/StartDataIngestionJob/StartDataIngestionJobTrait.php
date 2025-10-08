<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\StartDataIngestionJob;

trait StartDataIngestionJobTrait
{
    /**
     * @param StartDataIngestionJobRequest $args
     * @return StartDataIngestionJobResponse
     */
    public function startDataIngestionJob(StartDataIngestionJobRequest $args)
    {
        $result = parent::startDataIngestionJob($args->toArray());
        return new StartDataIngestionJobResponse($result->toArray());
    }
}

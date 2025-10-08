<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListDataIngestionJobs;

trait ListDataIngestionJobsTrait
{
    /**
     * @param ListDataIngestionJobsRequest $args
     * @return ListDataIngestionJobsResponse
     */
    public function listDataIngestionJobs(ListDataIngestionJobsRequest $args)
    {
        $result = parent::listDataIngestionJobs($args->toArray());
        return new ListDataIngestionJobsResponse($result->toArray());
    }
}

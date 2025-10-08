<?php

namespace Sunaoka\Aws\Structures\RoboMaker\BatchDescribeSimulationJob;

trait BatchDescribeSimulationJobTrait
{
    /**
     * @param BatchDescribeSimulationJobRequest $args
     * @return BatchDescribeSimulationJobResponse
     */
    public function batchDescribeSimulationJob(BatchDescribeSimulationJobRequest $args)
    {
        $result = parent::batchDescribeSimulationJob($args->toArray());
        return new BatchDescribeSimulationJobResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationJob;

trait DescribeSimulationJobTrait
{
    /**
     * @param DescribeSimulationJobRequest $args
     * @return DescribeSimulationJobResponse
     */
    public function describeSimulationJob(DescribeSimulationJobRequest $args)
    {
        $result = parent::describeSimulationJob($args->toArray());
        return new DescribeSimulationJobResponse($result->toArray());
    }
}

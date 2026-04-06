<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationJobBatch;

trait DescribeSimulationJobBatchTrait
{
    /**
     * @param DescribeSimulationJobBatchRequest $args
     * @return DescribeSimulationJobBatchResponse
     */
    public function describeSimulationJobBatch(DescribeSimulationJobBatchRequest $args)
    {
        $result = parent::describeSimulationJobBatch($args->toArray());
        return new DescribeSimulationJobBatchResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DescribeSimulation;

trait DescribeSimulationTrait
{
    /**
     * @param DescribeSimulationRequest $args
     * @return DescribeSimulationResponse
     */
    public function describeSimulation(DescribeSimulationRequest $args)
    {
        $result = parent::describeSimulation($args->toArray());
        return new DescribeSimulationResponse($result->toArray());
    }
}

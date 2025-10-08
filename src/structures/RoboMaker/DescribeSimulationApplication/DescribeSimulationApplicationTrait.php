<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationApplication;

trait DescribeSimulationApplicationTrait
{
    /**
     * @param DescribeSimulationApplicationRequest $args
     * @return DescribeSimulationApplicationResponse
     */
    public function describeSimulationApplication(DescribeSimulationApplicationRequest $args)
    {
        $result = parent::describeSimulationApplication($args->toArray());
        return new DescribeSimulationApplicationResponse($result->toArray());
    }
}

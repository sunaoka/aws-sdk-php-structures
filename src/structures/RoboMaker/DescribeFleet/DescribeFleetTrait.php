<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeFleet;

trait DescribeFleetTrait
{
    /**
     * @param DescribeFleetRequest $args
     * @return DescribeFleetResponse
     */
    public function describeFleet(DescribeFleetRequest $args)
    {
        $result = parent::describeFleet($args->toArray());
        return new DescribeFleetResponse($result->toArray());
    }
}

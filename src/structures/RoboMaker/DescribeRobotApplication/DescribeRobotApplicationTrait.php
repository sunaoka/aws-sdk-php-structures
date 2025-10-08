<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeRobotApplication;

trait DescribeRobotApplicationTrait
{
    /**
     * @param DescribeRobotApplicationRequest $args
     * @return DescribeRobotApplicationResponse
     */
    public function describeRobotApplication(DescribeRobotApplicationRequest $args)
    {
        $result = parent::describeRobotApplication($args->toArray());
        return new DescribeRobotApplicationResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\DescribeRoutingControl;

trait DescribeRoutingControlTrait
{
    /**
     * @param DescribeRoutingControlRequest $args
     * @return DescribeRoutingControlResponse
     */
    public function describeRoutingControl(DescribeRoutingControlRequest $args)
    {
        $result = parent::describeRoutingControl($args->toArray());
        return new DescribeRoutingControlResponse($result->toArray());
    }
}

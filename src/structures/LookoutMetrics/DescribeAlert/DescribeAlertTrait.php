<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeAlert;

trait DescribeAlertTrait
{
    /**
     * @param DescribeAlertRequest $args
     * @return DescribeAlertResponse
     */
    public function describeAlert(DescribeAlertRequest $args)
    {
        $result = parent::describeAlert($args->toArray());
        return new DescribeAlertResponse($result->toArray());
    }
}

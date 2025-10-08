<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeMonitor;

trait DescribeMonitorTrait
{
    /**
     * @param DescribeMonitorRequest $args
     * @return DescribeMonitorResponse
     */
    public function describeMonitor(DescribeMonitorRequest $args)
    {
        $result = parent::describeMonitor($args->toArray());
        return new DescribeMonitorResponse($result->toArray());
    }
}

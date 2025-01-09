<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeFleetMetric;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $metricName
 */
class DescribeFleetMetricRequest extends Request
{
    /**
     * @param array{metricName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

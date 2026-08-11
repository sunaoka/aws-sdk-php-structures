<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeMetric;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $MetricId
 */
class DescribeMetricRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     MetricId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

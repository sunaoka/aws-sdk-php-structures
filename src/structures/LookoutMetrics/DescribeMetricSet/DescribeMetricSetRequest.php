<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeMetricSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MetricSetArn
 */
class DescribeMetricSetRequest extends Request
{
    /**
     * @param array{MetricSetArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

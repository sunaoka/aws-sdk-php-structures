<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeCustomMetric;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $metricName
 */
class DescribeCustomMetricRequest extends Request
{
    /**
     * @param array{metricName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

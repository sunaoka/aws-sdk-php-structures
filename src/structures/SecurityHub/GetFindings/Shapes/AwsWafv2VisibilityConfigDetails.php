<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $CloudWatchMetricsEnabled
 * @property string $MetricName
 * @property bool $SampledRequestsEnabled
 */
class AwsWafv2VisibilityConfigDetails extends Shape
{
    /**
     * @param array{
     *     CloudWatchMetricsEnabled?: bool,
     *     MetricName?: string,
     *     SampledRequestsEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

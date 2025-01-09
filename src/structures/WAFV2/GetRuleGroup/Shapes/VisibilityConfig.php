<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $SampledRequestsEnabled
 * @property bool $CloudWatchMetricsEnabled
 * @property string $MetricName
 */
class VisibilityConfig extends Shape
{
    /**
     * @param array{
     *     SampledRequestsEnabled: bool,
     *     CloudWatchMetricsEnabled: bool,
     *     MetricName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

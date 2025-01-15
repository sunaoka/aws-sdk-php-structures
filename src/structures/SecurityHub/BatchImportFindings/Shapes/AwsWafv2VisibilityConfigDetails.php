<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $CloudWatchMetricsEnabled
 * @property string|null $MetricName
 * @property bool|null $SampledRequestsEnabled
 */
class AwsWafv2VisibilityConfigDetails extends Shape
{
    /**
     * @param array{
     *     CloudWatchMetricsEnabled?: bool|null,
     *     MetricName?: string|null,
     *     SampledRequestsEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

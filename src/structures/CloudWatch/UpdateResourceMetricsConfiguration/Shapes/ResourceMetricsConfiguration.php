<?php

namespace Sunaoka\Aws\Structures\CloudWatch\UpdateResourceMetricsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property list<ResourceMetricSelection>|null $MetricSelections
 */
class ResourceMetricsConfiguration extends Shape
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     UpdatedAt: \Aws\Api\DateTimeResult,
     *     MetricSelections?: list<ResourceMetricSelection>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

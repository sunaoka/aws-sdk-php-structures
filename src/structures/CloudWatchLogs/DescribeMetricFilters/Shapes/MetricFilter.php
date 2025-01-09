<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeMetricFilters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $filterName
 * @property string $filterPattern
 * @property list<MetricTransformation> $metricTransformations
 * @property int<0, max> $creationTime
 * @property string $logGroupName
 * @property bool $applyOnTransformedLogs
 */
class MetricFilter extends Shape
{
    /**
     * @param array{
     *     filterName?: string,
     *     filterPattern?: string,
     *     metricTransformations?: list<MetricTransformation>,
     *     creationTime?: int<0, max>,
     *     logGroupName?: string,
     *     applyOnTransformedLogs?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

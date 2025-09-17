<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeMetricFilters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $filterName
 * @property string|null $filterPattern
 * @property list<MetricTransformation>|null $metricTransformations
 * @property int<0, max>|null $creationTime
 * @property string|null $logGroupName
 * @property bool|null $applyOnTransformedLogs
 * @property string|null $fieldSelectionCriteria
 * @property list<string>|null $emitSystemFieldDimensions
 */
class MetricFilter extends Shape
{
    /**
     * @param array{
     *     filterName?: string|null,
     *     filterPattern?: string|null,
     *     metricTransformations?: list<MetricTransformation>|null,
     *     creationTime?: int<0, max>|null,
     *     logGroupName?: string|null,
     *     applyOnTransformedLogs?: bool|null,
     *     fieldSelectionCriteria?: string|null,
     *     emitSystemFieldDimensions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

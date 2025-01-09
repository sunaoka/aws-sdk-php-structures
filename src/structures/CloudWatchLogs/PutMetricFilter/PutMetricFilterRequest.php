<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutMetricFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property string $filterName
 * @property string $filterPattern
 * @property list<Shapes\MetricTransformation> $metricTransformations
 * @property bool $applyOnTransformedLogs
 */
class PutMetricFilterRequest extends Request
{
    /**
     * @param array{
     *     logGroupName: string,
     *     filterName: string,
     *     filterPattern: string,
     *     metricTransformations: list<Shapes\MetricTransformation>,
     *     applyOnTransformedLogs?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutMetricFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property string $filterName
 * @property string $filterPattern
 * @property list<Shapes\MetricTransformation> $metricTransformations
 */
class PutMetricFilterRequest extends Request
{
    /**
     * @param array{
     *     logGroupName: string,
     *     filterName: string,
     *     filterPattern: string,
     *     metricTransformations: list<Shapes\MetricTransformation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

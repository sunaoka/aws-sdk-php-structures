<?php

namespace Sunaoka\Aws\Structures\CloudWatch\ListMetricDataQueryDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Path
 * @property 'PROMQL'|'SQL'|'METRIC_MATH' $Type
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class MetricDataQueryDefinitionSummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Path: string,
     *     Type: 'PROMQL'|'SQL'|'METRIC_MATH',
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

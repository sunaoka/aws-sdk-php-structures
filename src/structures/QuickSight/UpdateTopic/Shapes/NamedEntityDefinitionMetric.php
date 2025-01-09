<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUM'|'MIN'|'MAX'|'COUNT'|'AVERAGE'|'DISTINCT_COUNT'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'|'MEDIAN'|'CUSTOM' $Aggregation
 * @property array<string, string> $AggregationFunctionParameters
 */
class NamedEntityDefinitionMetric extends Shape
{
    /**
     * @param array{
     *     Aggregation?: 'SUM'|'MIN'|'MAX'|'COUNT'|'AVERAGE'|'DISTINCT_COUNT'|'STDEV'|'STDEVP'|'VAR'|'VARP'|'PERCENTILE'|'MEDIAN'|'CUSTOM',
     *     AggregationFunctionParameters?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

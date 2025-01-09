<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomaliesForInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Group
 * @property list<string> $Dimensions
 * @property int<1, 10> $Limit
 */
class PerformanceInsightsMetricDimensionGroup extends Shape
{
    /**
     * @param array{
     *     Group?: string,
     *     Dimensions?: list<string>,
     *     Limit?: int<1, 10>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeAnomaly\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Group
 * @property list<string>|null $Dimensions
 * @property int<1, 10>|null $Limit
 */
class PerformanceInsightsMetricDimensionGroup extends Shape
{
    /**
     * @param array{
     *     Group?: string|null,
     *     Dimensions?: list<string>|null,
     *     Limit?: int<1, 10>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Dimensions
 * @property string $Group
 * @property int $Limit
 */
class PerformanceInsightsMetricDimensionGroup extends Shape
{
    /**
     * @param array{
     *     Dimensions?: list<string>,
     *     Group?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

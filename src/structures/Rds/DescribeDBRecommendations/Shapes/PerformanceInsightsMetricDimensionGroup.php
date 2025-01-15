<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Dimensions
 * @property string|null $Group
 * @property int|null $Limit
 */
class PerformanceInsightsMetricDimensionGroup extends Shape
{
    /**
     * @param array{
     *     Dimensions?: list<string>|null,
     *     Group?: string|null,
     *     Limit?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

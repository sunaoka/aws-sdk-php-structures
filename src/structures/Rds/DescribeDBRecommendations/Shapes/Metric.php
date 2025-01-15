<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property list<MetricReference>|null $References
 * @property string|null $StatisticsDetails
 * @property MetricQuery|null $MetricQuery
 */
class Metric extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     References?: list<MetricReference>|null,
     *     StatisticsDetails?: string|null,
     *     MetricQuery?: MetricQuery|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

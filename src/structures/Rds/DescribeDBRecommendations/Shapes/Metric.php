<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<MetricReference> $References
 * @property string $StatisticsDetails
 * @property MetricQuery $MetricQuery
 */
class Metric extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     References?: list<MetricReference>,
     *     StatisticsDetails?: string,
     *     MetricQuery?: MetricQuery
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

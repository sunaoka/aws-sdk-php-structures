<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricName
 * @property string $Namespace
 */
class RecommendationRelatedCloudWatchMetricsSourceDetail extends Shape
{
    /**
     * @param array{
     *     MetricName?: string,
     *     Namespace?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

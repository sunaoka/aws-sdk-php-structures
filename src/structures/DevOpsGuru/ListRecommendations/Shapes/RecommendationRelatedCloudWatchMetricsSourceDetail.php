<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetricName
 * @property string|null $Namespace
 */
class RecommendationRelatedCloudWatchMetricsSourceDetail extends Shape
{
    /**
     * @param array{
     *     MetricName?: string|null,
     *     Namespace?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

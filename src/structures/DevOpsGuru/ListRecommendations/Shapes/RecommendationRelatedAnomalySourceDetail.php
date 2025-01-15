<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RecommendationRelatedCloudWatchMetricsSourceDetail>|null $CloudWatchMetrics
 */
class RecommendationRelatedAnomalySourceDetail extends Shape
{
    /**
     * @param array{CloudWatchMetrics?: list<RecommendationRelatedCloudWatchMetricsSourceDetail>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

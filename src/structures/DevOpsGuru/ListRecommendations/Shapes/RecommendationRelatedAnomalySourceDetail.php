<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RecommendationRelatedCloudWatchMetricsSourceDetail> $CloudWatchMetrics
 */
class RecommendationRelatedAnomalySourceDetail extends Shape
{
    /**
     * @param array{CloudWatchMetrics?: list<RecommendationRelatedCloudWatchMetricsSourceDetail>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

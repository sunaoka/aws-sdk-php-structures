<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RecommendationRelatedAnomalyResource> $Resources
 * @property list<RecommendationRelatedAnomalySourceDetail> $SourceDetails
 * @property string $AnomalyId
 */
class RecommendationRelatedAnomaly extends Shape
{
    /**
     * @param array{
     *     Resources?: list<RecommendationRelatedAnomalyResource>,
     *     SourceDetails?: list<RecommendationRelatedAnomalySourceDetail>,
     *     AnomalyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

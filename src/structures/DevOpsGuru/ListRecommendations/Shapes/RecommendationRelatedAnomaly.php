<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RecommendationRelatedAnomalyResource>|null $Resources
 * @property list<RecommendationRelatedAnomalySourceDetail>|null $SourceDetails
 * @property string|null $AnomalyId
 */
class RecommendationRelatedAnomaly extends Shape
{
    /**
     * @param array{
     *     Resources?: list<RecommendationRelatedAnomalyResource>|null,
     *     SourceDetails?: list<RecommendationRelatedAnomalySourceDetail>|null,
     *     AnomalyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\PI\ListPerformanceAnalysisReportRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RecommendationId
 * @property string|null $RecommendationDescription
 * @property string|null $RecommendationDetails
 */
class Recommendation extends Shape
{
    /**
     * @param array{
     *     RecommendationId?: string|null,
     *     RecommendationDescription?: string|null,
     *     RecommendationDetails?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

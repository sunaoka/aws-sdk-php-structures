<?php

namespace Sunaoka\Aws\Structures\PI\GetPerformanceAnalysisReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RecommendationId
 * @property string $RecommendationDescription
 */
class Recommendation extends Shape
{
    /**
     * @param array{
     *     RecommendationId?: string,
     *     RecommendationDescription?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

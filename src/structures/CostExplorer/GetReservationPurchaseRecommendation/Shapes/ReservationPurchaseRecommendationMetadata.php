<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RecommendationId
 * @property string|null $GenerationTimestamp
 */
class ReservationPurchaseRecommendationMetadata extends Shape
{
    /**
     * @param array{
     *     RecommendationId?: string|null,
     *     GenerationTimestamp?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

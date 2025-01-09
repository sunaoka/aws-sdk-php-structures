<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationPurchaseRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RecommendationId
 * @property string $GenerationTimestamp
 * @property string $AdditionalMetadata
 */
class ReservationPurchaseRecommendationMetadata extends Shape
{
    /**
     * @param array{
     *     RecommendationId?: string,
     *     GenerationTimestamp?: string,
     *     AdditionalMetadata?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

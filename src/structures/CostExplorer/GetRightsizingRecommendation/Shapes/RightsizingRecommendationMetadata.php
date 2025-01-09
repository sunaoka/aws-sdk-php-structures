<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RecommendationId
 * @property string $GenerationTimestamp
 * @property 'SEVEN_DAYS'|'THIRTY_DAYS'|'SIXTY_DAYS' $LookbackPeriodInDays
 * @property string $AdditionalMetadata
 */
class RightsizingRecommendationMetadata extends Shape
{
    /**
     * @param array{
     *     RecommendationId?: string,
     *     GenerationTimestamp?: string,
     *     LookbackPeriodInDays?: 'SEVEN_DAYS'|'THIRTY_DAYS'|'SIXTY_DAYS',
     *     AdditionalMetadata?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

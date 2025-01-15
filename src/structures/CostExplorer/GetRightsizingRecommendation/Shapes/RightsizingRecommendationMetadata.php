<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RecommendationId
 * @property string|null $GenerationTimestamp
 * @property 'SEVEN_DAYS'|'THIRTY_DAYS'|'SIXTY_DAYS'|null $LookbackPeriodInDays
 * @property string|null $AdditionalMetadata
 */
class RightsizingRecommendationMetadata extends Shape
{
    /**
     * @param array{
     *     RecommendationId?: string|null,
     *     GenerationTimestamp?: string|null,
     *     LookbackPeriodInDays?: 'SEVEN_DAYS'|'THIRTY_DAYS'|'SIXTY_DAYS'|null,
     *     AdditionalMetadata?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

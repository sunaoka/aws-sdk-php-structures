<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetProfileRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property array<string, string>|null $Values
 * @property string|null $PromotionName
 * @property int<1, 100>|null $PercentPromotedItems
 */
class RecommenderPromotionalFilter extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Values?: array<string, string>|null,
     *     PromotionName?: string|null,
     *     PercentPromotedItems?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\PersonalizeRuntime\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $itemId
 * @property double|null $score
 * @property string|null $promotionName
 * @property array<string, string>|null $metadata
 * @property list<string>|null $reason
 */
class PredictedItem extends Shape
{
    /**
     * @param array{
     *     itemId?: string|null,
     *     score?: double|null,
     *     promotionName?: string|null,
     *     metadata?: array<string, string>|null,
     *     reason?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

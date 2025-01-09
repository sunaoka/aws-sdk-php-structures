<?php

namespace Sunaoka\Aws\Structures\PersonalizeRuntime\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $itemId
 * @property double $score
 * @property string $promotionName
 * @property array<string, string> $metadata
 * @property list<string> $reason
 */
class PredictedItem extends Shape
{
    /**
     * @param array{
     *     itemId?: string,
     *     score?: double,
     *     promotionName?: string,
     *     metadata?: array<string, string>,
     *     reason?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

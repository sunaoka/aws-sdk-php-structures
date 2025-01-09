<?php

namespace Sunaoka\Aws\Structures\GameLift\StartMatchmaking\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlayerId
 * @property array<string, AttributeValue> $PlayerAttributes
 * @property string $Team
 * @property array<string, int> $LatencyInMs
 */
class Player extends Shape
{
    /**
     * @param array{
     *     PlayerId?: string,
     *     PlayerAttributes?: array<string, AttributeValue>,
     *     Team?: string,
     *     LatencyInMs?: array<string, int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

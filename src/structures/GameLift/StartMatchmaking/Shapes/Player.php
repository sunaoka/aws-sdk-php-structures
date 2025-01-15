<?php

namespace Sunaoka\Aws\Structures\GameLift\StartMatchmaking\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PlayerId
 * @property array<string, AttributeValue>|null $PlayerAttributes
 * @property string|null $Team
 * @property array<string, int<1, max>>|null $LatencyInMs
 */
class Player extends Shape
{
    /**
     * @param array{
     *     PlayerId?: string|null,
     *     PlayerAttributes?: array<string, AttributeValue>|null,
     *     Team?: string|null,
     *     LatencyInMs?: array<string, int<1, max>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

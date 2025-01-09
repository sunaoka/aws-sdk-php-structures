<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeMatchmaking\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlayerId
 * @property array<string, AttributeValue> $PlayerAttributes
 * @property string $Team
 * @property array<string, int<1, max>> $LatencyInMs
 */
class Player extends Shape
{
    /**
     * @param array{
     *     PlayerId?: string,
     *     PlayerAttributes?: array<string, AttributeValue>,
     *     Team?: string,
     *     LatencyInMs?: array<string, int<1, max>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

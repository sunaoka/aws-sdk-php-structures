<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PostText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<5, 86400>|null $timeToLiveInSeconds
 * @property int<1, 20>|null $turnsToLive
 */
class ActiveContextTimeToLive extends Shape
{
    /**
     * @param array{
     *     timeToLiveInSeconds?: int<5, 86400>|null,
     *     turnsToLive?: int<1, 20>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

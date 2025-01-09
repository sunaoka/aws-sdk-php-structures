<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PutSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<5, 86400> $timeToLiveInSeconds
 * @property int<1, 20> $turnsToLive
 */
class ActiveContextTimeToLive extends Shape
{
    /**
     * @param array{
     *     timeToLiveInSeconds?: int<5, 86400>,
     *     turnsToLive?: int<1, 20>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

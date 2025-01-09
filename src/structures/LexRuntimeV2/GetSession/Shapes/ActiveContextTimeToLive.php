<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $timeToLiveInSeconds
 * @property int $turnsToLive
 */
class ActiveContextTimeToLive extends Shape
{
    /**
     * @param array{
     *     timeToLiveInSeconds: int,
     *     turnsToLive: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

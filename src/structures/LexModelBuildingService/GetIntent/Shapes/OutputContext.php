<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int $timeToLiveInSeconds
 * @property int $turnsToLive
 */
class OutputContext extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     timeToLiveInSeconds: int,
     *     turnsToLive: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

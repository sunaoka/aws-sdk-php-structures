<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameSessionPlacement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlayerId
 * @property string $PlayerSessionId
 */
class PlacedPlayerSession extends Shape
{
    /**
     * @param array{
     *     PlayerId?: string,
     *     PlayerSessionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

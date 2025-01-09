<?php

namespace Sunaoka\Aws\Structures\GameLift\StartGameSessionPlacement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlayerId
 * @property string $PlayerData
 */
class DesiredPlayerSession extends Shape
{
    /**
     * @param array{
     *     PlayerId?: string,
     *     PlayerData?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

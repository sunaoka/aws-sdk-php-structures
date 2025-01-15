<?php

namespace Sunaoka\Aws\Structures\GameLift\StartGameSessionPlacement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PlayerId
 * @property string|null $PlayerData
 */
class DesiredPlayerSession extends Shape
{
    /**
     * @param array{
     *     PlayerId?: string|null,
     *     PlayerData?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

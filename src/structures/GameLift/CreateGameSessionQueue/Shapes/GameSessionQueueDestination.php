<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateGameSessionQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DestinationArn
 */
class GameSessionQueueDestination extends Shape
{
    /**
     * @param array{DestinationArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

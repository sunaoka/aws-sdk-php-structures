<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameSessionQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationArn
 */
class GameSessionQueueDestination extends Shape
{
    /**
     * @param array{DestinationArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

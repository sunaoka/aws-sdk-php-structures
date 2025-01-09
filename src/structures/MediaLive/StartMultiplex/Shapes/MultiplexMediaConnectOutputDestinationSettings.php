<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartMultiplex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EntitlementArn
 */
class MultiplexMediaConnectOutputDestinationSettings extends Shape
{
    /**
     * @param array{EntitlementArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

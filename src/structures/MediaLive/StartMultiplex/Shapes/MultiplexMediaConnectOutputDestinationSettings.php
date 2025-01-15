<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartMultiplex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EntitlementArn
 */
class MultiplexMediaConnectOutputDestinationSettings extends Shape
{
    /**
     * @param array{EntitlementArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

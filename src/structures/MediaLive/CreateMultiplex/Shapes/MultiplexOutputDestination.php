<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateMultiplex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MultiplexMediaConnectOutputDestinationSettings|null $MediaConnectSettings
 */
class MultiplexOutputDestination extends Shape
{
    /**
     * @param array{MediaConnectSettings?: MultiplexMediaConnectOutputDestinationSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

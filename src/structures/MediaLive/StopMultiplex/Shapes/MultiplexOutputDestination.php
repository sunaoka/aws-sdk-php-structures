<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopMultiplex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MultiplexMediaConnectOutputDestinationSettings $MediaConnectSettings
 */
class MultiplexOutputDestination extends Shape
{
    /**
     * @param array{MediaConnectSettings?: MultiplexMediaConnectOutputDestinationSettings} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListMultiplexes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TransportStreamBitrate
 */
class MultiplexSettingsSummary extends Shape
{
    /**
     * @param array{TransportStreamBitrate?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListMultiplexes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1000000, 100000000> $TransportStreamBitrate
 */
class MultiplexSettingsSummary extends Shape
{
    /**
     * @param array{TransportStreamBitrate?: int<1000000, 100000000>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

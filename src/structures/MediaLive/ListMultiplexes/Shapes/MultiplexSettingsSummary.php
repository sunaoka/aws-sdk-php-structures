<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListMultiplexes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1000000, 100000000>|null $TransportStreamBitrate
 */
class MultiplexSettingsSummary extends Shape
{
    /**
     * @param array{TransportStreamBitrate?: int<1000000, 100000000>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

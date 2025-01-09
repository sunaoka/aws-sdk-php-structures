<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListSignalingChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<5, 120> $MessageTtlSeconds
 */
class SingleMasterConfiguration extends Shape
{
    /**
     * @param array{MessageTtlSeconds?: int<5, 120>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

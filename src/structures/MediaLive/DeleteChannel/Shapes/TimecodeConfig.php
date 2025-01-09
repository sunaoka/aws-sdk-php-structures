<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMBEDDED'|'SYSTEMCLOCK'|'ZEROBASED' $Source
 * @property int<1, 1000000> $SyncThreshold
 */
class TimecodeConfig extends Shape
{
    /**
     * @param array{
     *     Source: 'EMBEDDED'|'SYSTEMCLOCK'|'ZEROBASED',
     *     SyncThreshold?: int<1, 1000000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

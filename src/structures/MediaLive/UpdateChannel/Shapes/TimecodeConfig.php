<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMBEDDED'|'SYSTEMCLOCK'|'ZEROBASED' $Source
 * @property int<1, 1000000>|null $SyncThreshold
 */
class TimecodeConfig extends Shape
{
    /**
     * @param array{
     *     Source: 'EMBEDDED'|'SYSTEMCLOCK'|'ZEROBASED',
     *     SyncThreshold?: int<1, 1000000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

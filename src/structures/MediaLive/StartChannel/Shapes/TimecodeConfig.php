<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMBEDDED'|'SYSTEMCLOCK'|'ZEROBASED' $Source
 * @property int|null $SyncThreshold
 */
class TimecodeConfig extends Shape
{
    /**
     * @param array{
     *     Source: 'EMBEDDED'|'SYSTEMCLOCK'|'ZEROBASED',
     *     SyncThreshold?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

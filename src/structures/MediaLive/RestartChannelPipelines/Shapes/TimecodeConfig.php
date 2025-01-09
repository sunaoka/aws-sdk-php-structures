<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMBEDDED'|'SYSTEMCLOCK'|'ZEROBASED' $Source
 * @property int $SyncThreshold
 */
class TimecodeConfig extends Shape
{
    /**
     * @param array{
     *     Source: 'EMBEDDED'|'SYSTEMCLOCK'|'ZEROBASED',
     *     SyncThreshold?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

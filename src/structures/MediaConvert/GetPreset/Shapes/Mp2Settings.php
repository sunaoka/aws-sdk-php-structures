<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetPreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Bitrate
 * @property int $Channels
 * @property int $SampleRate
 */
class Mp2Settings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: int,
     *     Channels?: int,
     *     SampleRate?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

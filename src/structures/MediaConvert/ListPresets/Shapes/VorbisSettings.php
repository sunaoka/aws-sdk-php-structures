<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListPresets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Channels
 * @property int $SampleRate
 * @property int $VbrQuality
 */
class VorbisSettings extends Shape
{
    /**
     * @param array{
     *     Channels?: int,
     *     SampleRate?: int,
     *     VbrQuality?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListPresets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 2> $Channels
 * @property int<22050, 48000> $SampleRate
 * @property int<-1, 10> $VbrQuality
 */
class VorbisSettings extends Shape
{
    /**
     * @param array{
     *     Channels?: int<1, 2>,
     *     SampleRate?: int<22050, 48000>,
     *     VbrQuality?: int<-1, 10>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 2>|null $Channels
 * @property int<22050, 48000>|null $SampleRate
 * @property int<-1, 10>|null $VbrQuality
 */
class VorbisSettings extends Shape
{
    /**
     * @param array{
     *     Channels?: int<0, 2>|null,
     *     SampleRate?: int<22050, 48000>|null,
     *     VbrQuality?: int<-1, 10>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<16000, 320000>|null $Bitrate
 * @property int<0, 2>|null $Channels
 * @property 'CBR'|'VBR'|null $RateControlMode
 * @property int<22050, 48000>|null $SampleRate
 * @property int<0, 9>|null $VbrQuality
 */
class Mp3Settings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: int<16000, 320000>|null,
     *     Channels?: int<0, 2>|null,
     *     RateControlMode?: 'CBR'|'VBR'|null,
     *     SampleRate?: int<22050, 48000>|null,
     *     VbrQuality?: int<0, 9>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

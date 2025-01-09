<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<16000, 320000> $Bitrate
 * @property int<1, 2> $Channels
 * @property 'CBR'|'VBR' $RateControlMode
 * @property int<22050, 48000> $SampleRate
 * @property int<0, 9> $VbrQuality
 */
class Mp3Settings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: int<16000, 320000>,
     *     Channels?: int<1, 2>,
     *     RateControlMode?: 'CBR'|'VBR',
     *     SampleRate?: int<22050, 48000>,
     *     VbrQuality?: int<0, 9>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

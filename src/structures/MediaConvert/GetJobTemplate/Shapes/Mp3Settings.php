<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Bitrate
 * @property int $Channels
 * @property 'CBR'|'VBR' $RateControlMode
 * @property int $SampleRate
 * @property int $VbrQuality
 */
class Mp3Settings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: int,
     *     Channels?: int,
     *     RateControlMode?: 'CBR'|'VBR',
     *     SampleRate?: int,
     *     VbrQuality?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

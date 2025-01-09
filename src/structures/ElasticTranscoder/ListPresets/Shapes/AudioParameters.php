<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListPresets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Codec
 * @property string $SampleRate
 * @property string $BitRate
 * @property string $Channels
 * @property string $AudioPackingMode
 * @property AudioCodecOptions $CodecOptions
 */
class AudioParameters extends Shape
{
    /**
     * @param array{
     *     Codec?: string,
     *     SampleRate?: string,
     *     BitRate?: string,
     *     Channels?: string,
     *     AudioPackingMode?: string,
     *     CodecOptions?: AudioCodecOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

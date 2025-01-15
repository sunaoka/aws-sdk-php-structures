<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ReadPreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Codec
 * @property string|null $SampleRate
 * @property string|null $BitRate
 * @property string|null $Channels
 * @property string|null $AudioPackingMode
 * @property AudioCodecOptions|null $CodecOptions
 */
class AudioParameters extends Shape
{
    /**
     * @param array{
     *     Codec?: string|null,
     *     SampleRate?: string|null,
     *     BitRate?: string|null,
     *     Channels?: string|null,
     *     AudioPackingMode?: string|null,
     *     CodecOptions?: AudioCodecOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MediaConvert\Probe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $BitDepth
 * @property int|null $BitRate
 * @property int|null $Channels
 * @property FrameRate|null $FrameRate
 * @property string|null $LanguageCode
 * @property int|null $SampleRate
 */
class AudioProperties extends Shape
{
    /**
     * @param array{
     *     BitDepth?: int|null,
     *     BitRate?: int|null,
     *     Channels?: int|null,
     *     FrameRate?: FrameRate|null,
     *     LanguageCode?: string|null,
     *     SampleRate?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FileInput
 * @property list<VideoOverlayInputClipping> $InputClippings
 * @property 'EMBEDDED'|'ZEROBASED'|'SPECIFIEDSTART' $TimecodeSource
 * @property string $TimecodeStart
 */
class VideoOverlayInput extends Shape
{
    /**
     * @param array{
     *     FileInput?: string,
     *     InputClippings?: list<VideoOverlayInputClipping>,
     *     TimecodeSource?: 'EMBEDDED'|'ZEROBASED'|'SPECIFIEDSTART',
     *     TimecodeStart?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

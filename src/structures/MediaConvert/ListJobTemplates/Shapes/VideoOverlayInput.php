<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FileInput
 * @property list<VideoOverlayInputClipping>|null $InputClippings
 * @property 'EMBEDDED'|'ZEROBASED'|'SPECIFIEDSTART'|null $TimecodeSource
 * @property string|null $TimecodeStart
 */
class VideoOverlayInput extends Shape
{
    /**
     * @param array{
     *     FileInput?: string|null,
     *     InputClippings?: list<VideoOverlayInputClipping>|null,
     *     TimecodeSource?: 'EMBEDDED'|'ZEROBASED'|'SPECIFIEDSTART'|null,
     *     TimecodeStart?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

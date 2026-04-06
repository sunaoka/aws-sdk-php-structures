<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AudioSelector>|null $AudioSelectors
 * @property string|null $FileInput
 * @property list<VideoOverlayInputClipping>|null $InputClippings
 * @property 'EMBEDDED'|'ZEROBASED'|'SPECIFIEDSTART'|null $TimecodeSource
 * @property string|null $TimecodeStart
 */
class VideoOverlayInput extends Shape
{
    /**
     * @param array{
     *     AudioSelectors?: array<string, AudioSelector>|null,
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

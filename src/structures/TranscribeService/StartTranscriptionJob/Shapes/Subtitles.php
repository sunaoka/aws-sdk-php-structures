<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartTranscriptionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'vtt'|'srt'>|null $Formats
 * @property int<0, 1>|null $OutputStartIndex
 */
class Subtitles extends Shape
{
    /**
     * @param array{
     *     Formats?: list<'vtt'|'srt'>|null,
     *     OutputStartIndex?: int<0, 1>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

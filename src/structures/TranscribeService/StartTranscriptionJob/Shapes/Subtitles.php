<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartTranscriptionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'vtt'|'srt'> $Formats
 * @property int<0, 1> $OutputStartIndex
 */
class Subtitles extends Shape
{
    /**
     * @param array{
     *     Formats?: list<'vtt'|'srt'>,
     *     OutputStartIndex?: int<0, 1>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

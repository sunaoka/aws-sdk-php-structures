<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartTranscriptionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'vtt'|'srt'> $Formats
 * @property int $OutputStartIndex
 */
class Subtitles extends Shape
{
    /**
     * @param array{
     *     Formats?: list<'vtt'|'srt'>,
     *     OutputStartIndex?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

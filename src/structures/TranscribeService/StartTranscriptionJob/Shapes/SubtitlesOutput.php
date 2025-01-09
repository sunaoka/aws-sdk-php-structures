<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartTranscriptionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'vtt'|'srt'> $Formats
 * @property list<string> $SubtitleFileUris
 * @property int $OutputStartIndex
 */
class SubtitlesOutput extends Shape
{
    /**
     * @param array{
     *     Formats?: list<'vtt'|'srt'>,
     *     SubtitleFileUris?: list<string>,
     *     OutputStartIndex?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetTranscriptionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'vtt'|'srt'> $Formats
 * @property list<string> $SubtitleFileUris
 * @property int<0, 1> $OutputStartIndex
 */
class SubtitlesOutput extends Shape
{
    /**
     * @param array{
     *     Formats?: list<'vtt'|'srt'>,
     *     SubtitleFileUris?: list<string>,
     *     OutputStartIndex?: int<0, 1>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

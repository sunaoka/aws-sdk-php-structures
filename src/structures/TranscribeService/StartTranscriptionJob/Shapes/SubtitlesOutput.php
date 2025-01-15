<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartTranscriptionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'vtt'|'srt'>|null $Formats
 * @property list<string>|null $SubtitleFileUris
 * @property int<0, 1>|null $OutputStartIndex
 */
class SubtitlesOutput extends Shape
{
    /**
     * @param array{
     *     Formats?: list<'vtt'|'srt'>|null,
     *     SubtitleFileUris?: list<string>|null,
     *     OutputStartIndex?: int<0, 1>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

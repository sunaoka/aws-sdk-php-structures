<?php

namespace Sunaoka\Aws\Structures\TranscribeService\TranscribeAudio\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TranscribeAudioMetadata|null $Metadata
 * @property TranscribeAudioResults|null $Results
 * @property TranscribeAudioResults|null $RedactedResults
 */
class TranscriptResponse extends Shape
{
    /**
     * @param array{
     *     Metadata?: TranscribeAudioMetadata|null,
     *     Results?: TranscribeAudioResults|null,
     *     RedactedResults?: TranscribeAudioResults|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

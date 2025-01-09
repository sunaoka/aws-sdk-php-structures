<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartTranscriptionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TranscriptFileUri
 * @property string $RedactedTranscriptFileUri
 */
class Transcript extends Shape
{
    /**
     * @param array{
     *     TranscriptFileUri?: string,
     *     RedactedTranscriptFileUri?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

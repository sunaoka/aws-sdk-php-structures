<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetTranscriptionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TranscriptFileUri
 * @property string|null $RedactedTranscriptFileUri
 */
class Transcript extends Shape
{
    /**
     * @param array{
     *     TranscriptFileUri?: string|null,
     *     RedactedTranscriptFileUri?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

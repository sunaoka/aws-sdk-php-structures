<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartMedicalTranscriptionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TranscriptFileUri
 */
class MedicalTranscript extends Shape
{
    /**
     * @param array{TranscriptFileUri?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

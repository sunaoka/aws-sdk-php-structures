<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartMedicalTranscriptionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TranscriptFileUri
 */
class MedicalTranscript extends Shape
{
    /**
     * @param array{TranscriptFileUri?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

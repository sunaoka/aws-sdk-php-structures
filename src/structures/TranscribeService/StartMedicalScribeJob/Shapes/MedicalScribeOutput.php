<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartMedicalScribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TranscriptFileUri
 * @property string $ClinicalDocumentUri
 */
class MedicalScribeOutput extends Shape
{
    /**
     * @param array{
     *     TranscriptFileUri: string,
     *     ClinicalDocumentUri: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

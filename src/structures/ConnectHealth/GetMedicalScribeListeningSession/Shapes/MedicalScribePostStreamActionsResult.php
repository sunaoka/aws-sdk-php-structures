<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetMedicalScribeListeningSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClinicalNoteGenerationResult|null $clinicalNoteGenerationResult
 * @property MedicalCodeGenerationResult|null $medicalCodeGenerationResult
 */
class MedicalScribePostStreamActionsResult extends Shape
{
    /**
     * @param array{
     *     clinicalNoteGenerationResult?: ClinicalNoteGenerationResult|null,
     *     medicalCodeGenerationResult?: MedicalCodeGenerationResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartMedicalScribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MedicalScribePatientContext|null $PatientContext
 */
class MedicalScribeContext extends Shape
{
    /**
     * @param array{PatientContext?: MedicalScribePatientContext|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

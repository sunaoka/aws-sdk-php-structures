<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartMedicalScribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HE_HIM'|'SHE_HER'|'THEY_THEM'|null $Pronouns
 */
class MedicalScribePatientContext extends Shape
{
    /**
     * @param array{Pronouns?: 'HE_HIM'|'SHE_HER'|'THEY_THEM'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

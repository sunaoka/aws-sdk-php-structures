<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartMedicalScribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HISTORY_AND_PHYSICAL'|'GIRPP'|'BIRP'|'SIRP'|'DAP'|'BEHAVIORAL_SOAP'|'PHYSICAL_SOAP'|null $NoteTemplate
 */
class ClinicalNoteGenerationSettings extends Shape
{
    /**
     * @param array{NoteTemplate?: 'HISTORY_AND_PHYSICAL'|'GIRPP'|'BIRP'|'SIRP'|'DAP'|'BEHAVIORAL_SOAP'|'PHYSICAL_SOAP'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

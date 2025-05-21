<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetMedicalScribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HISTORY_AND_PHYSICAL'|'GIRPP'|null $NoteTemplate
 */
class ClinicalNoteGenerationSettings extends Shape
{
    /**
     * @param array{NoteTemplate?: 'HISTORY_AND_PHYSICAL'|'GIRPP'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

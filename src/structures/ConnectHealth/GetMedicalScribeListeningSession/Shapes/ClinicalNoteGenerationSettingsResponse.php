<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetMedicalScribeListeningSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NoteTemplateSettingsResponse|null $noteTemplateSettings
 */
class ClinicalNoteGenerationSettingsResponse extends Shape
{
    /**
     * @param array{noteTemplateSettings?: NoteTemplateSettingsResponse|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

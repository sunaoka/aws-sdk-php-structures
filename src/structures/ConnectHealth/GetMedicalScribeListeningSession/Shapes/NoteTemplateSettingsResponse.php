<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetMedicalScribeListeningSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ManagedTemplateResponse|null $managedTemplate
 * @property CustomTemplateResponse|null $customTemplate
 */
class NoteTemplateSettingsResponse extends Shape
{
    /**
     * @param array{
     *     managedTemplate?: ManagedTemplateResponse|null,
     *     customTemplate?: CustomTemplateResponse|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

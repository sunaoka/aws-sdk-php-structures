<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetMedicalScribeListeningSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $outputS3Uri
 * @property ClinicalNoteGenerationSettingsResponse $clinicalNoteGenerationSettings
 */
class MedicalScribePostStreamActionSettingsResponse extends Shape
{
    /**
     * @param array{
     *     outputS3Uri: string,
     *     clinicalNoteGenerationSettings: ClinicalNoteGenerationSettingsResponse
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetMedicalScribeListeningSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $outputS3Uri
 * @property ClinicalNoteGenerationSettingsResponse $clinicalNoteGenerationSettings
 * @property MedicalCodeGenerationSettingsResponse|null $medicalCodeGenerationSettings
 */
class MedicalScribePostStreamActionSettingsResponse extends Shape
{
    /**
     * @param array{
     *     outputS3Uri: string,
     *     clinicalNoteGenerationSettings: ClinicalNoteGenerationSettingsResponse,
     *     medicalCodeGenerationSettings?: MedicalCodeGenerationSettingsResponse|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

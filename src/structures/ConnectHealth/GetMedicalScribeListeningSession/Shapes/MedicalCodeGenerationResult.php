<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetMedicalScribeListeningSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArtifactDetails|null $medicalCodesResult
 * @property string|null $jobId
 */
class MedicalCodeGenerationResult extends Shape
{
    /**
     * @param array{
     *     medicalCodesResult?: ArtifactDetails|null,
     *     jobId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

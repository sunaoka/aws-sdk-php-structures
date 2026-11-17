<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\StartMedicalCodingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $text
 * @property Shapes\MedicalCodesPatientContext|null $patientContext
 * @property Shapes\MedicalCodesEncounterContext|null $encounterContext
 * @property Shapes\MedicalCodingOutputDataConfig $outputDataConfig
 * @property string|null $datasetId
 * @property string|null $clientToken
 */
class StartMedicalCodingJobRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     text: string,
     *     patientContext?: Shapes\MedicalCodesPatientContext|null,
     *     encounterContext?: Shapes\MedicalCodesEncounterContext|null,
     *     outputDataConfig: Shapes\MedicalCodingOutputDataConfig,
     *     datasetId?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

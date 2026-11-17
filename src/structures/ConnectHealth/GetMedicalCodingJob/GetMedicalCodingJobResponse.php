<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetMedicalCodingJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobId
 * @property string $jobArn
 * @property 'SUBMITTED'|'IN_PROGRESS'|'FAILED'|'SUCCEEDED' $jobStatus
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $updatedTime
 * @property string $text
 * @property Shapes\MedicalCodesPatientContext|null $patientContext
 * @property Shapes\MedicalCodesEncounterContext|null $encounterContext
 * @property Shapes\MedicalCodingOutputDataConfig $outputDataConfig
 * @property string|null $datasetId
 * @property Shapes\MedicalCodingOutput|null $medicalCodingOutput
 * @property string|null $statusDetails
 */
class GetMedicalCodingJobResponse extends Response
{
}

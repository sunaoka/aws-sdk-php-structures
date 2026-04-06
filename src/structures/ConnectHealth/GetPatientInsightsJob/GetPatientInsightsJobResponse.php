<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetPatientInsightsJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobId
 * @property string $jobArn
 * @property 'SUBMITTED'|'IN_PROGRESS'|'FAILED'|'SUCCEEDED' $jobStatus
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $updatedTime
 * @property Shapes\InsightsOutput|null $insightsOutput
 * @property string|null $statusDetails
 * @property Shapes\PatientInsightsPatientContext $patientContext
 * @property Shapes\InsightsContext $insightsContext
 * @property Shapes\PatientInsightsEncounterContext $encounterContext
 * @property Shapes\UserContext $userContext
 * @property Shapes\InputDataConfig $inputDataConfig
 * @property Shapes\OutputDataConfig $outputDataConfig
 */
class GetPatientInsightsJobResponse extends Response
{
}

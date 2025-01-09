<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\StartDICOMImportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $datastoreId
 * @property string $jobId
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED' $jobStatus
 * @property \Aws\Api\DateTimeResult $submittedAt
 */
class StartDICOMImportJobResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\HealthLake\StartDataTransformationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobId
 * @property 'SUBMITTED'|'QUEUED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED' $JobStatus
 */
class StartDataTransformationJobResponse extends Response
{
}

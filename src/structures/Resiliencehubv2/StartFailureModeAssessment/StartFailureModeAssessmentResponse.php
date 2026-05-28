<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\StartFailureModeAssessment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $assessmentId
 * @property string|null $serviceArn
 * @property 'NOT_STARTED'|'PENDING'|'IN_PROGRESS'|'FAILED'|'SUCCESS'|null $assessmentStatus
 * @property \Aws\Api\DateTimeResult|null $startedAt
 */
class StartFailureModeAssessmentResponse extends Response
{
}

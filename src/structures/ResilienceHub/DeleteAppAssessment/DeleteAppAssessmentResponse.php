<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DeleteAppAssessment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $assessmentArn
 * @property 'Pending'|'InProgress'|'Failed'|'Success' $assessmentStatus
 */
class DeleteAppAssessmentResponse extends Response
{
}

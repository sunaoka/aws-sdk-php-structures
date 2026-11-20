<?php

namespace Sunaoka\Aws\Structures\Kafka\DeleteAssessment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AssessmentArn
 * @property 'IN_PROGRESS'|'COMPLETE'|'FAILED'|'DELETING'|null $Status
 */
class DeleteAssessmentResponse extends Response
{
}

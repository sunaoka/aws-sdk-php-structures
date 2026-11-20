<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateAssessment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AssessmentArn
 * @property 'UPDATE_BROKER_TYPE'|null $AssessmentType
 * @property string|null $ClusterArn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property 'IN_PROGRESS'|'COMPLETE'|'FAILED'|'DELETING'|null $Status
 */
class CreateAssessmentResponse extends Response
{
}

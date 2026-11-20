<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeAssessment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AssessmentArn
 * @property Shapes\AssessmentParameters|null $AssessmentParameters
 * @property 'UPDATE_BROKER_TYPE'|null $AssessmentType
 * @property string|null $ClusterArn
 * @property \Aws\Api\DateTimeResult|null $CompletionTime
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property 'IN_PROGRESS'|'COMPLETE'|'FAILED'|'DELETING'|null $Status
 * @property string|null $StatusMessage
 * @property Shapes\AssessmentSummary|null $Summary
 * @property array<string, string>|null $Tags
 */
class DescribeAssessmentResponse extends Response
{
}

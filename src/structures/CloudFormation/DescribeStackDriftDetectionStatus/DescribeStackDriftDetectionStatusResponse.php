<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackDriftDetectionStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $StackId
 * @property string $StackDriftDetectionId
 * @property 'DRIFTED'|'IN_SYNC'|'UNKNOWN'|'NOT_CHECKED'|null $StackDriftStatus
 * @property 'DETECTION_IN_PROGRESS'|'DETECTION_FAILED'|'DETECTION_COMPLETE' $DetectionStatus
 * @property string|null $DetectionStatusReason
 * @property int|null $DriftedStackResourceCount
 * @property \Aws\Api\DateTimeResult $Timestamp
 */
class DescribeStackDriftDetectionStatusResponse extends Response
{
}

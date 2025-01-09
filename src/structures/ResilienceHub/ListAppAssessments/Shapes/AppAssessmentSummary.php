<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppAssessments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appArn
 * @property string $appVersion
 * @property string $assessmentArn
 * @property string $assessmentName
 * @property 'Pending'|'InProgress'|'Failed'|'Success' $assessmentStatus
 * @property 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy' $complianceStatus
 * @property Cost $cost
 * @property 'NotChecked'|'NotDetected'|'Detected' $driftStatus
 * @property \Aws\Api\DateTimeResult $endTime
 * @property 'User'|'System' $invoker
 * @property string $message
 * @property double $resiliencyScore
 * @property \Aws\Api\DateTimeResult $startTime
 * @property string $versionName
 */
class AppAssessmentSummary extends Shape
{
    /**
     * @param array{
     *     appArn?: string,
     *     appVersion?: string,
     *     assessmentArn: string,
     *     assessmentName?: string,
     *     assessmentStatus: 'Pending'|'InProgress'|'Failed'|'Success',
     *     complianceStatus?: 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy',
     *     cost?: Cost,
     *     driftStatus?: 'NotChecked'|'NotDetected'|'Detected',
     *     endTime?: \Aws\Api\DateTimeResult,
     *     invoker?: 'User'|'System',
     *     message?: string,
     *     resiliencyScore?: double,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     versionName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

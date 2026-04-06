<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppAssessments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $appArn
 * @property string|null $appVersion
 * @property string $assessmentArn
 * @property string|null $assessmentName
 * @property 'Pending'|'InProgress'|'Failed'|'Success' $assessmentStatus
 * @property 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy'|null $complianceStatus
 * @property Cost|null $cost
 * @property 'NotChecked'|'NotDetected'|'Detected'|null $driftStatus
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property 'User'|'System'|null $invoker
 * @property string|null $message
 * @property double|null $resiliencyScore
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property string|null $versionName
 */
class AppAssessmentSummary extends Shape
{
    /**
     * @param array{
     *     appArn?: string|null,
     *     appVersion?: string|null,
     *     assessmentArn: string,
     *     assessmentName?: string|null,
     *     assessmentStatus: 'Pending'|'InProgress'|'Failed'|'Success',
     *     complianceStatus?: 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy'|null,
     *     cost?: Cost|null,
     *     driftStatus?: 'NotChecked'|'NotDetected'|'Detected'|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     invoker?: 'User'|'System'|null,
     *     message?: string|null,
     *     resiliencyScore?: double|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     versionName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

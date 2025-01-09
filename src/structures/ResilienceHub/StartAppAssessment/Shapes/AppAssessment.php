<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\StartAppAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appArn
 * @property string $appVersion
 * @property string $assessmentArn
 * @property string $assessmentName
 * @property 'Pending'|'InProgress'|'Failed'|'Success' $assessmentStatus
 * @property array<'Software'|'Hardware'|'AZ'|'Region', DisruptionCompliance> $compliance
 * @property 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy' $complianceStatus
 * @property Cost $cost
 * @property 'NotChecked'|'NotDetected'|'Detected' $driftStatus
 * @property \Aws\Api\DateTimeResult $endTime
 * @property 'User'|'System' $invoker
 * @property string $message
 * @property ResiliencyPolicy $policy
 * @property ResiliencyScore $resiliencyScore
 * @property ResourceErrorsDetails $resourceErrorsDetails
 * @property \Aws\Api\DateTimeResult $startTime
 * @property AssessmentSummary $summary
 * @property array<string, string> $tags
 * @property string $versionName
 */
class AppAssessment extends Shape
{
    /**
     * @param array{
     *     appArn?: string,
     *     appVersion?: string,
     *     assessmentArn: string,
     *     assessmentName?: string,
     *     assessmentStatus: 'Pending'|'InProgress'|'Failed'|'Success',
     *     compliance?: array<'Software'|'Hardware'|'AZ'|'Region', DisruptionCompliance>,
     *     complianceStatus?: 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy',
     *     cost?: Cost,
     *     driftStatus?: 'NotChecked'|'NotDetected'|'Detected',
     *     endTime?: \Aws\Api\DateTimeResult,
     *     invoker: 'User'|'System',
     *     message?: string,
     *     policy?: ResiliencyPolicy,
     *     resiliencyScore?: ResiliencyScore,
     *     resourceErrorsDetails?: ResourceErrorsDetails,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     summary?: AssessmentSummary,
     *     tags?: array<string, string>,
     *     versionName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

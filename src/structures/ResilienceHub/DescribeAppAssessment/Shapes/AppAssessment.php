<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeAppAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $appArn
 * @property string|null $appVersion
 * @property string $assessmentArn
 * @property string|null $assessmentName
 * @property 'Pending'|'InProgress'|'Failed'|'Success' $assessmentStatus
 * @property array<'Software'|'Hardware'|'AZ'|'Region', DisruptionCompliance>|null $compliance
 * @property 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy'|null $complianceStatus
 * @property Cost|null $cost
 * @property 'NotChecked'|'NotDetected'|'Detected'|null $driftStatus
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property 'User'|'System' $invoker
 * @property string|null $message
 * @property ResiliencyPolicy|null $policy
 * @property ResiliencyScore|null $resiliencyScore
 * @property ResourceErrorsDetails|null $resourceErrorsDetails
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property AssessmentSummary|null $summary
 * @property array<string, string>|null $tags
 * @property string|null $versionName
 */
class AppAssessment extends Shape
{
    /**
     * @param array{
     *     appArn?: string|null,
     *     appVersion?: string|null,
     *     assessmentArn: string,
     *     assessmentName?: string|null,
     *     assessmentStatus: 'Pending'|'InProgress'|'Failed'|'Success',
     *     compliance?: array<'Software'|'Hardware'|'AZ'|'Region', DisruptionCompliance>|null,
     *     complianceStatus?: 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy'|null,
     *     cost?: Cost|null,
     *     driftStatus?: 'NotChecked'|'NotDetected'|'Detected'|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     invoker: 'User'|'System',
     *     message?: string|null,
     *     policy?: ResiliencyPolicy|null,
     *     resiliencyScore?: ResiliencyScore|null,
     *     resourceErrorsDetails?: ResourceErrorsDetails|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     summary?: AssessmentSummary|null,
     *     tags?: array<string, string>|null,
     *     versionName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

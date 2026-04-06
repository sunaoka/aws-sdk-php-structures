<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListApps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appArn
 * @property 'Disabled'|'Daily'|null $assessmentSchedule
 * @property string|null $awsApplicationArn
 * @property 'PolicyBreached'|'PolicyMet'|'NotAssessed'|'ChangesDetected'|'NotApplicable'|'MissingPolicy'|null $complianceStatus
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string|null $description
 * @property 'NotChecked'|'NotDetected'|'Detected'|null $driftStatus
 * @property \Aws\Api\DateTimeResult|null $lastAppComplianceEvaluationTime
 * @property string $name
 * @property double|null $resiliencyScore
 * @property int|null $rpoInSecs
 * @property int|null $rtoInSecs
 * @property 'Active'|'Deleting'|null $status
 */
class AppSummary extends Shape
{
    /**
     * @param array{
     *     appArn: string,
     *     assessmentSchedule?: 'Disabled'|'Daily'|null,
     *     awsApplicationArn?: string|null,
     *     complianceStatus?: 'PolicyBreached'|'PolicyMet'|'NotAssessed'|'ChangesDetected'|'NotApplicable'|'MissingPolicy'|null,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     driftStatus?: 'NotChecked'|'NotDetected'|'Detected'|null,
     *     lastAppComplianceEvaluationTime?: \Aws\Api\DateTimeResult|null,
     *     name: string,
     *     resiliencyScore?: double|null,
     *     rpoInSecs?: int|null,
     *     rtoInSecs?: int|null,
     *     status?: 'Active'|'Deleting'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

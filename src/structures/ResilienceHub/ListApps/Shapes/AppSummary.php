<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListApps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appArn
 * @property 'Disabled'|'Daily' $assessmentSchedule
 * @property string $awsApplicationArn
 * @property 'PolicyBreached'|'PolicyMet'|'NotAssessed'|'ChangesDetected'|'NotApplicable'|'MissingPolicy' $complianceStatus
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $description
 * @property 'NotChecked'|'NotDetected'|'Detected' $driftStatus
 * @property \Aws\Api\DateTimeResult $lastAppComplianceEvaluationTime
 * @property string $name
 * @property double $resiliencyScore
 * @property int $rpoInSecs
 * @property int $rtoInSecs
 * @property 'Active'|'Deleting' $status
 */
class AppSummary extends Shape
{
    /**
     * @param array{
     *     appArn: string,
     *     assessmentSchedule?: 'Disabled'|'Daily',
     *     awsApplicationArn?: string,
     *     complianceStatus?: 'PolicyBreached'|'PolicyMet'|'NotAssessed'|'ChangesDetected'|'NotApplicable'|'MissingPolicy',
     *     creationTime: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     driftStatus?: 'NotChecked'|'NotDetected'|'Detected',
     *     lastAppComplianceEvaluationTime?: \Aws\Api\DateTimeResult,
     *     name: string,
     *     resiliencyScore?: double,
     *     rpoInSecs?: int,
     *     rtoInSecs?: int,
     *     status?: 'Active'|'Deleting'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appArn
 * @property 'Disabled'|'Daily' $assessmentSchedule
 * @property string $awsApplicationArn
 * @property 'PolicyBreached'|'PolicyMet'|'NotAssessed'|'ChangesDetected'|'NotApplicable'|'MissingPolicy' $complianceStatus
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $description
 * @property 'NotChecked'|'NotDetected'|'Detected' $driftStatus
 * @property list<EventSubscription> $eventSubscriptions
 * @property \Aws\Api\DateTimeResult $lastAppComplianceEvaluationTime
 * @property \Aws\Api\DateTimeResult $lastDriftEvaluationTime
 * @property \Aws\Api\DateTimeResult $lastResiliencyScoreEvaluationTime
 * @property string $name
 * @property PermissionModel $permissionModel
 * @property string $policyArn
 * @property double $resiliencyScore
 * @property int $rpoInSecs
 * @property int $rtoInSecs
 * @property 'Active'|'Deleting' $status
 * @property array<string, string> $tags
 */
class App extends Shape
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
     *     eventSubscriptions?: list<EventSubscription>,
     *     lastAppComplianceEvaluationTime?: \Aws\Api\DateTimeResult,
     *     lastDriftEvaluationTime?: \Aws\Api\DateTimeResult,
     *     lastResiliencyScoreEvaluationTime?: \Aws\Api\DateTimeResult,
     *     name: string,
     *     permissionModel?: PermissionModel,
     *     policyArn?: string,
     *     resiliencyScore?: double,
     *     rpoInSecs?: int,
     *     rtoInSecs?: int,
     *     status?: 'Active'|'Deleting',
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

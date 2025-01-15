<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\CreateApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appArn
 * @property 'Disabled'|'Daily'|null $assessmentSchedule
 * @property string|null $awsApplicationArn
 * @property 'PolicyBreached'|'PolicyMet'|'NotAssessed'|'ChangesDetected'|'NotApplicable'|'MissingPolicy'|null $complianceStatus
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string|null $description
 * @property 'NotChecked'|'NotDetected'|'Detected'|null $driftStatus
 * @property list<EventSubscription>|null $eventSubscriptions
 * @property \Aws\Api\DateTimeResult|null $lastAppComplianceEvaluationTime
 * @property \Aws\Api\DateTimeResult|null $lastDriftEvaluationTime
 * @property \Aws\Api\DateTimeResult|null $lastResiliencyScoreEvaluationTime
 * @property string $name
 * @property PermissionModel|null $permissionModel
 * @property string|null $policyArn
 * @property double|null $resiliencyScore
 * @property int|null $rpoInSecs
 * @property int|null $rtoInSecs
 * @property 'Active'|'Deleting'|null $status
 * @property array<string, string>|null $tags
 */
class App extends Shape
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
     *     eventSubscriptions?: list<EventSubscription>|null,
     *     lastAppComplianceEvaluationTime?: \Aws\Api\DateTimeResult|null,
     *     lastDriftEvaluationTime?: \Aws\Api\DateTimeResult|null,
     *     lastResiliencyScoreEvaluationTime?: \Aws\Api\DateTimeResult|null,
     *     name: string,
     *     permissionModel?: PermissionModel|null,
     *     policyArn?: string|null,
     *     resiliencyScore?: double|null,
     *     rpoInSecs?: int|null,
     *     rtoInSecs?: int|null,
     *     status?: 'Active'|'Deleting'|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

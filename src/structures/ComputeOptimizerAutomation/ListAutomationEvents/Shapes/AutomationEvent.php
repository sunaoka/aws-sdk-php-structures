<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAutomationEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $eventId
 * @property string|null $eventDescription
 * @property 'SnapshotAndDeleteUnattachedEbsVolume'|'UpgradeEbsVolumeType'|null $eventType
 * @property 'Ready'|'InProgress'|'Complete'|'Failed'|'Cancelled'|'RollbackReady'|'RollbackInProgress'|'RollbackComplete'|'RollbackFailed'|null $eventStatus
 * @property string|null $eventStatusReason
 * @property string|null $resourceArn
 * @property string|null $resourceId
 * @property string|null $recommendedActionId
 * @property string|null $accountId
 * @property string|null $region
 * @property string|null $ruleId
 * @property 'EbsVolume'|null $resourceType
 * @property \Aws\Api\DateTimeResult|null $createdTimestamp
 * @property \Aws\Api\DateTimeResult|null $completedTimestamp
 * @property EstimatedMonthlySavings|null $estimatedMonthlySavings
 */
class AutomationEvent extends Shape
{
    /**
     * @param array{
     *     eventId?: string|null,
     *     eventDescription?: string|null,
     *     eventType?: 'SnapshotAndDeleteUnattachedEbsVolume'|'UpgradeEbsVolumeType'|null,
     *     eventStatus?: 'Ready'|'InProgress'|'Complete'|'Failed'|'Cancelled'|'RollbackReady'|'RollbackInProgress'|'RollbackComplete'|'RollbackFailed'|null,
     *     eventStatusReason?: string|null,
     *     resourceArn?: string|null,
     *     resourceId?: string|null,
     *     recommendedActionId?: string|null,
     *     accountId?: string|null,
     *     region?: string|null,
     *     ruleId?: string|null,
     *     resourceType?: 'EbsVolume'|null,
     *     createdTimestamp?: \Aws\Api\DateTimeResult|null,
     *     completedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     estimatedMonthlySavings?: EstimatedMonthlySavings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

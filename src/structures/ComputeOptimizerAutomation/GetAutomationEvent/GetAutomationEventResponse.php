<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\GetAutomationEvent;

use Sunaoka\Aws\Structures\Response;

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
 * @property Shapes\EstimatedMonthlySavings|null $estimatedMonthlySavings
 */
class GetAutomationEventResponse extends Response
{
}

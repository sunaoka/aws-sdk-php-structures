<?php

namespace Sunaoka\Aws\Structures\Ssm\GetOpsItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CreatedBy
 * @property string $OpsItemType
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $Description
 * @property string $LastModifiedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property list<OpsItemNotification> $Notifications
 * @property int<1, 5> $Priority
 * @property list<RelatedOpsItem> $RelatedOpsItems
 * @property 'Open'|'InProgress'|'Resolved'|'Pending'|'TimedOut'|'Cancelling'|'Cancelled'|'Failed'|'CompletedWithSuccess'|'CompletedWithFailure'|'Scheduled'|'RunbookInProgress'|'PendingChangeCalendarOverride'|'ChangeCalendarOverrideApproved'|'ChangeCalendarOverrideRejected'|'PendingApproval'|'Approved'|'Rejected'|'Closed' $Status
 * @property string $OpsItemId
 * @property string $Version
 * @property string $Title
 * @property string $Source
 * @property array<string, OpsItemDataValue> $OperationalData
 * @property string $Category
 * @property string $Severity
 * @property \Aws\Api\DateTimeResult $ActualStartTime
 * @property \Aws\Api\DateTimeResult $ActualEndTime
 * @property \Aws\Api\DateTimeResult $PlannedStartTime
 * @property \Aws\Api\DateTimeResult $PlannedEndTime
 * @property string $OpsItemArn
 */
class OpsItem extends Shape
{
    /**
     * @param array{
     *     CreatedBy?: string,
     *     OpsItemType?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     LastModifiedBy?: string,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     Notifications?: list<OpsItemNotification>,
     *     Priority?: int<1, 5>,
     *     RelatedOpsItems?: list<RelatedOpsItem>,
     *     Status?: 'Open'|'InProgress'|'Resolved'|'Pending'|'TimedOut'|'Cancelling'|'Cancelled'|'Failed'|'CompletedWithSuccess'|'CompletedWithFailure'|'Scheduled'|'RunbookInProgress'|'PendingChangeCalendarOverride'|'ChangeCalendarOverrideApproved'|'ChangeCalendarOverrideRejected'|'PendingApproval'|'Approved'|'Rejected'|'Closed',
     *     OpsItemId?: string,
     *     Version?: string,
     *     Title?: string,
     *     Source?: string,
     *     OperationalData?: array<string, OpsItemDataValue>,
     *     Category?: string,
     *     Severity?: string,
     *     ActualStartTime?: \Aws\Api\DateTimeResult,
     *     ActualEndTime?: \Aws\Api\DateTimeResult,
     *     PlannedStartTime?: \Aws\Api\DateTimeResult,
     *     PlannedEndTime?: \Aws\Api\DateTimeResult,
     *     OpsItemArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

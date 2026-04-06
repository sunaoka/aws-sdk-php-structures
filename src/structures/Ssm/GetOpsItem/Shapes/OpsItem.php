<?php

namespace Sunaoka\Aws\Structures\Ssm\GetOpsItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CreatedBy
 * @property string|null $OpsItemType
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $Description
 * @property string|null $LastModifiedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property list<OpsItemNotification>|null $Notifications
 * @property int<1, 5>|null $Priority
 * @property list<RelatedOpsItem>|null $RelatedOpsItems
 * @property 'Open'|'InProgress'|'Resolved'|'Pending'|'TimedOut'|'Cancelling'|'Cancelled'|'Failed'|'CompletedWithSuccess'|'CompletedWithFailure'|'Scheduled'|'RunbookInProgress'|'PendingChangeCalendarOverride'|'ChangeCalendarOverrideApproved'|'ChangeCalendarOverrideRejected'|'PendingApproval'|'Approved'|'Rejected'|'Closed'|null $Status
 * @property string|null $OpsItemId
 * @property string|null $Version
 * @property string|null $Title
 * @property string|null $Source
 * @property array<string, OpsItemDataValue>|null $OperationalData
 * @property string|null $Category
 * @property string|null $Severity
 * @property \Aws\Api\DateTimeResult|null $ActualStartTime
 * @property \Aws\Api\DateTimeResult|null $ActualEndTime
 * @property \Aws\Api\DateTimeResult|null $PlannedStartTime
 * @property \Aws\Api\DateTimeResult|null $PlannedEndTime
 * @property string|null $OpsItemArn
 */
class OpsItem extends Shape
{
    /**
     * @param array{
     *     CreatedBy?: string|null,
     *     OpsItemType?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     LastModifiedBy?: string|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     Notifications?: list<OpsItemNotification>|null,
     *     Priority?: int<1, 5>|null,
     *     RelatedOpsItems?: list<RelatedOpsItem>|null,
     *     Status?: 'Open'|'InProgress'|'Resolved'|'Pending'|'TimedOut'|'Cancelling'|'Cancelled'|'Failed'|'CompletedWithSuccess'|'CompletedWithFailure'|'Scheduled'|'RunbookInProgress'|'PendingChangeCalendarOverride'|'ChangeCalendarOverrideApproved'|'ChangeCalendarOverrideRejected'|'PendingApproval'|'Approved'|'Rejected'|'Closed'|null,
     *     OpsItemId?: string|null,
     *     Version?: string|null,
     *     Title?: string|null,
     *     Source?: string|null,
     *     OperationalData?: array<string, OpsItemDataValue>|null,
     *     Category?: string|null,
     *     Severity?: string|null,
     *     ActualStartTime?: \Aws\Api\DateTimeResult|null,
     *     ActualEndTime?: \Aws\Api\DateTimeResult|null,
     *     PlannedStartTime?: \Aws\Api\DateTimeResult|null,
     *     PlannedEndTime?: \Aws\Api\DateTimeResult|null,
     *     OpsItemArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

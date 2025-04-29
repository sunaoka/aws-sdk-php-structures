<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeOpsItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $LastModifiedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property int<1, 5>|null $Priority
 * @property string|null $Source
 * @property 'Open'|'InProgress'|'Resolved'|'Pending'|'TimedOut'|'Cancelling'|'Cancelled'|'Failed'|'CompletedWithSuccess'|'CompletedWithFailure'|'Scheduled'|'RunbookInProgress'|'PendingChangeCalendarOverride'|'ChangeCalendarOverrideApproved'|'ChangeCalendarOverrideRejected'|'PendingApproval'|'Approved'|'Revoked'|'Rejected'|'Closed'|null $Status
 * @property string|null $OpsItemId
 * @property string|null $Title
 * @property array<string, OpsItemDataValue>|null $OperationalData
 * @property string|null $Category
 * @property string|null $Severity
 * @property string|null $OpsItemType
 * @property \Aws\Api\DateTimeResult|null $ActualStartTime
 * @property \Aws\Api\DateTimeResult|null $ActualEndTime
 * @property \Aws\Api\DateTimeResult|null $PlannedStartTime
 * @property \Aws\Api\DateTimeResult|null $PlannedEndTime
 */
class OpsItemSummary extends Shape
{
    /**
     * @param array{
     *     CreatedBy?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedBy?: string|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     Priority?: int<1, 5>|null,
     *     Source?: string|null,
     *     Status?: 'Open'|'InProgress'|'Resolved'|'Pending'|'TimedOut'|'Cancelling'|'Cancelled'|'Failed'|'CompletedWithSuccess'|'CompletedWithFailure'|'Scheduled'|'RunbookInProgress'|'PendingChangeCalendarOverride'|'ChangeCalendarOverrideApproved'|'ChangeCalendarOverrideRejected'|'PendingApproval'|'Approved'|'Revoked'|'Rejected'|'Closed'|null,
     *     OpsItemId?: string|null,
     *     Title?: string|null,
     *     OperationalData?: array<string, OpsItemDataValue>|null,
     *     Category?: string|null,
     *     Severity?: string|null,
     *     OpsItemType?: string|null,
     *     ActualStartTime?: \Aws\Api\DateTimeResult|null,
     *     ActualEndTime?: \Aws\Api\DateTimeResult|null,
     *     PlannedStartTime?: \Aws\Api\DateTimeResult|null,
     *     PlannedEndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

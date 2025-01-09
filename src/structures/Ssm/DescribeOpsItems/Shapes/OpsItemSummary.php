<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeOpsItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CreatedBy
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $LastModifiedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property int<1, 5> $Priority
 * @property string $Source
 * @property 'Open'|'InProgress'|'Resolved'|'Pending'|'TimedOut'|'Cancelling'|'Cancelled'|'Failed'|'CompletedWithSuccess'|'CompletedWithFailure'|'Scheduled'|'RunbookInProgress'|'PendingChangeCalendarOverride'|'ChangeCalendarOverrideApproved'|'ChangeCalendarOverrideRejected'|'PendingApproval'|'Approved'|'Rejected'|'Closed' $Status
 * @property string $OpsItemId
 * @property string $Title
 * @property array<string, OpsItemDataValue> $OperationalData
 * @property string $Category
 * @property string $Severity
 * @property string $OpsItemType
 * @property \Aws\Api\DateTimeResult $ActualStartTime
 * @property \Aws\Api\DateTimeResult $ActualEndTime
 * @property \Aws\Api\DateTimeResult $PlannedStartTime
 * @property \Aws\Api\DateTimeResult $PlannedEndTime
 */
class OpsItemSummary extends Shape
{
    /**
     * @param array{
     *     CreatedBy?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedBy?: string,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     Priority?: int<1, 5>,
     *     Source?: string,
     *     Status?: 'Open'|'InProgress'|'Resolved'|'Pending'|'TimedOut'|'Cancelling'|'Cancelled'|'Failed'|'CompletedWithSuccess'|'CompletedWithFailure'|'Scheduled'|'RunbookInProgress'|'PendingChangeCalendarOverride'|'ChangeCalendarOverrideApproved'|'ChangeCalendarOverrideRejected'|'PendingApproval'|'Approved'|'Rejected'|'Closed',
     *     OpsItemId?: string,
     *     Title?: string,
     *     OperationalData?: array<string, OpsItemDataValue>,
     *     Category?: string,
     *     Severity?: string,
     *     OpsItemType?: string,
     *     ActualStartTime?: \Aws\Api\DateTimeResult,
     *     ActualEndTime?: \Aws\Api\DateTimeResult,
     *     PlannedStartTime?: \Aws\Api\DateTimeResult,
     *     PlannedEndTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

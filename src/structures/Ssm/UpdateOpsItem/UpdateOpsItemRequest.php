<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateOpsItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property array<string, Shapes\OpsItemDataValue> $OperationalData
 * @property list<string> $OperationalDataToDelete
 * @property list<Shapes\OpsItemNotification> $Notifications
 * @property int<1, 5> $Priority
 * @property list<Shapes\RelatedOpsItem> $RelatedOpsItems
 * @property 'Open'|'InProgress'|'Resolved'|'Pending'|'TimedOut'|'Cancelling'|'Cancelled'|'Failed'|'CompletedWithSuccess'|'CompletedWithFailure'|'Scheduled'|'RunbookInProgress'|'PendingChangeCalendarOverride'|'ChangeCalendarOverrideApproved'|'ChangeCalendarOverrideRejected'|'PendingApproval'|'Approved'|'Rejected'|'Closed' $Status
 * @property string $OpsItemId
 * @property string $Title
 * @property string $Category
 * @property string $Severity
 * @property \Aws\Api\DateTimeResult $ActualStartTime
 * @property \Aws\Api\DateTimeResult $ActualEndTime
 * @property \Aws\Api\DateTimeResult $PlannedStartTime
 * @property \Aws\Api\DateTimeResult $PlannedEndTime
 * @property string $OpsItemArn
 */
class UpdateOpsItemRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     OperationalData?: array<string, Shapes\OpsItemDataValue>,
     *     OperationalDataToDelete?: list<string>,
     *     Notifications?: list<Shapes\OpsItemNotification>,
     *     Priority?: int<1, 5>,
     *     RelatedOpsItems?: list<Shapes\RelatedOpsItem>,
     *     Status?: 'Open'|'InProgress'|'Resolved'|'Pending'|'TimedOut'|'Cancelling'|'Cancelled'|'Failed'|'CompletedWithSuccess'|'CompletedWithFailure'|'Scheduled'|'RunbookInProgress'|'PendingChangeCalendarOverride'|'ChangeCalendarOverrideApproved'|'ChangeCalendarOverrideRejected'|'PendingApproval'|'Approved'|'Rejected'|'Closed',
     *     OpsItemId: string,
     *     Title?: string,
     *     Category?: string,
     *     Severity?: string,
     *     ActualStartTime?: \Aws\Api\DateTimeResult,
     *     ActualEndTime?: \Aws\Api\DateTimeResult,
     *     PlannedStartTime?: \Aws\Api\DateTimeResult,
     *     PlannedEndTime?: \Aws\Api\DateTimeResult,
     *     OpsItemArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

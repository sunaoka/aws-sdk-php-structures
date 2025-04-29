<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateOpsItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property array<string, Shapes\OpsItemDataValue>|null $OperationalData
 * @property list<string>|null $OperationalDataToDelete
 * @property list<Shapes\OpsItemNotification>|null $Notifications
 * @property int<1, 5>|null $Priority
 * @property list<Shapes\RelatedOpsItem>|null $RelatedOpsItems
 * @property 'Open'|'InProgress'|'Resolved'|'Pending'|'TimedOut'|'Cancelling'|'Cancelled'|'Failed'|'CompletedWithSuccess'|'CompletedWithFailure'|'Scheduled'|'RunbookInProgress'|'PendingChangeCalendarOverride'|'ChangeCalendarOverrideApproved'|'ChangeCalendarOverrideRejected'|'PendingApproval'|'Approved'|'Revoked'|'Rejected'|'Closed'|null $Status
 * @property string $OpsItemId
 * @property string|null $Title
 * @property string|null $Category
 * @property string|null $Severity
 * @property \Aws\Api\DateTimeResult|null $ActualStartTime
 * @property \Aws\Api\DateTimeResult|null $ActualEndTime
 * @property \Aws\Api\DateTimeResult|null $PlannedStartTime
 * @property \Aws\Api\DateTimeResult|null $PlannedEndTime
 * @property string|null $OpsItemArn
 */
class UpdateOpsItemRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     OperationalData?: array<string, Shapes\OpsItemDataValue>|null,
     *     OperationalDataToDelete?: list<string>|null,
     *     Notifications?: list<Shapes\OpsItemNotification>|null,
     *     Priority?: int<1, 5>|null,
     *     RelatedOpsItems?: list<Shapes\RelatedOpsItem>|null,
     *     Status?: 'Open'|'InProgress'|'Resolved'|'Pending'|'TimedOut'|'Cancelling'|'Cancelled'|'Failed'|'CompletedWithSuccess'|'CompletedWithFailure'|'Scheduled'|'RunbookInProgress'|'PendingChangeCalendarOverride'|'ChangeCalendarOverrideApproved'|'ChangeCalendarOverrideRejected'|'PendingApproval'|'Approved'|'Revoked'|'Rejected'|'Closed'|null,
     *     OpsItemId: string,
     *     Title?: string|null,
     *     Category?: string|null,
     *     Severity?: string|null,
     *     ActualStartTime?: \Aws\Api\DateTimeResult|null,
     *     ActualEndTime?: \Aws\Api\DateTimeResult|null,
     *     PlannedStartTime?: \Aws\Api\DateTimeResult|null,
     *     PlannedEndTime?: \Aws\Api\DateTimeResult|null,
     *     OpsItemArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Kms\ScheduleKeyDeletion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $KeyId
 * @property \Aws\Api\DateTimeResult|null $DeletionDate
 * @property 'Creating'|'Enabled'|'Disabled'|'PendingDeletion'|'PendingImport'|'PendingReplicaDeletion'|'Unavailable'|'Updating'|null $KeyState
 * @property int<1, 365>|null $PendingWindowInDays
 */
class ScheduleKeyDeletionResponse extends Response
{
}

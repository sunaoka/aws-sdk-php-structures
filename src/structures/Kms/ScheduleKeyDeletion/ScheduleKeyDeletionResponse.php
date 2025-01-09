<?php

namespace Sunaoka\Aws\Structures\Kms\ScheduleKeyDeletion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $KeyId
 * @property \Aws\Api\DateTimeResult $DeletionDate
 * @property 'Creating'|'Enabled'|'Disabled'|'PendingDeletion'|'PendingImport'|'PendingReplicaDeletion'|'Unavailable'|'Updating' $KeyState
 * @property int $PendingWindowInDays
 */
class ScheduleKeyDeletionResponse extends Response
{
}

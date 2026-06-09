<?php

namespace Sunaoka\Aws\Structures\Odb\RestoreAutonomousDatabase;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $autonomousDatabaseId
 * @property string|null $displayName
 * @property 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|'STOPPING'|'STOPPED'|'STARTING'|'UNAVAILABLE'|'RESTORE_IN_PROGRESS'|'RESTORE_FAILED'|'BACKUP_IN_PROGRESS'|'SCALE_IN_PROGRESS'|'AVAILABLE_NEEDS_ATTENTION'|'RESTARTING'|'RECREATING'|'ROLE_CHANGE_IN_PROGRESS'|'UPGRADING'|'INACCESSIBLE'|'STANDBY'|null $status
 * @property string|null $statusReason
 */
class RestoreAutonomousDatabaseResponse extends Response
{
}

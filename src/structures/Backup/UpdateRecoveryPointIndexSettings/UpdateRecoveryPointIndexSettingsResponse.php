<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateRecoveryPointIndexSettings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $BackupVaultName
 * @property string|null $RecoveryPointArn
 * @property 'PENDING'|'ACTIVE'|'FAILED'|'DELETING'|null $IndexStatus
 * @property 'ENABLED'|'DISABLED'|null $Index
 */
class UpdateRecoveryPointIndexSettingsResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateRecoveryPointIndexSettings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $BackupVaultName
 * @property string $RecoveryPointArn
 * @property 'PENDING'|'ACTIVE'|'FAILED'|'DELETING' $IndexStatus
 * @property 'ENABLED'|'DISABLED' $Index
 */
class UpdateRecoveryPointIndexSettingsResponse extends Response
{
}

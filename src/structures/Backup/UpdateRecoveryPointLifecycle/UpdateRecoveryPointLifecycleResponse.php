<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateRecoveryPointLifecycle;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $BackupVaultArn
 * @property string $RecoveryPointArn
 * @property Shapes\Lifecycle $Lifecycle
 * @property Shapes\CalculatedLifecycle $CalculatedLifecycle
 */
class UpdateRecoveryPointLifecycleResponse extends Response
{
}

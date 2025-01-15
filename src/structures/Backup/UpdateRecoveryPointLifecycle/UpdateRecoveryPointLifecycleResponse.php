<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateRecoveryPointLifecycle;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $BackupVaultArn
 * @property string|null $RecoveryPointArn
 * @property Shapes\Lifecycle|null $Lifecycle
 * @property Shapes\CalculatedLifecycle|null $CalculatedLifecycle
 */
class UpdateRecoveryPointLifecycleResponse extends Response
{
}

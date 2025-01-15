<?php

namespace Sunaoka\Aws\Structures\Backup\GetRecoveryPointRestoreMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $BackupVaultArn
 * @property string|null $RecoveryPointArn
 * @property array<string, string>|null $RestoreMetadata
 * @property string|null $ResourceType
 */
class GetRecoveryPointRestoreMetadataResponse extends Response
{
}

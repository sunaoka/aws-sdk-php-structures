<?php

namespace Sunaoka\Aws\Structures\Backup\GetRecoveryPointRestoreMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $BackupVaultArn
 * @property string $RecoveryPointArn
 * @property array<string, string> $RestoreMetadata
 * @property string $ResourceType
 */
class GetRecoveryPointRestoreMetadataResponse extends Response
{
}

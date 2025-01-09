<?php

namespace Sunaoka\Aws\Structures\Backup\GetRecoveryPointIndexDetails;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RecoveryPointArn
 * @property string $BackupVaultArn
 * @property string $SourceResourceArn
 * @property \Aws\Api\DateTimeResult $IndexCreationDate
 * @property \Aws\Api\DateTimeResult $IndexDeletionDate
 * @property \Aws\Api\DateTimeResult $IndexCompletionDate
 * @property 'PENDING'|'ACTIVE'|'FAILED'|'DELETING' $IndexStatus
 * @property string $IndexStatusMessage
 * @property int $TotalItemsIndexed
 */
class GetRecoveryPointIndexDetailsResponse extends Response
{
}

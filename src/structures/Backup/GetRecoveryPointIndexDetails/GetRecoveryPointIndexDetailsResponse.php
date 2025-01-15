<?php

namespace Sunaoka\Aws\Structures\Backup\GetRecoveryPointIndexDetails;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $RecoveryPointArn
 * @property string|null $BackupVaultArn
 * @property string|null $SourceResourceArn
 * @property \Aws\Api\DateTimeResult|null $IndexCreationDate
 * @property \Aws\Api\DateTimeResult|null $IndexDeletionDate
 * @property \Aws\Api\DateTimeResult|null $IndexCompletionDate
 * @property 'PENDING'|'ACTIVE'|'FAILED'|'DELETING'|null $IndexStatus
 * @property string|null $IndexStatusMessage
 * @property int|null $TotalItemsIndexed
 */
class GetRecoveryPointIndexDetailsResponse extends Response
{
}

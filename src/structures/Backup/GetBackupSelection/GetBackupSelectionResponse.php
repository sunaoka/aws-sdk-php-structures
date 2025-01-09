<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupSelection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\BackupSelection $BackupSelection
 * @property string $SelectionId
 * @property string $BackupPlanId
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property string $CreatorRequestId
 */
class GetBackupSelectionResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupSelection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\BackupSelection|null $BackupSelection
 * @property string|null $SelectionId
 * @property string|null $BackupPlanId
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property string|null $CreatorRequestId
 */
class GetBackupSelectionResponse extends Response
{
}

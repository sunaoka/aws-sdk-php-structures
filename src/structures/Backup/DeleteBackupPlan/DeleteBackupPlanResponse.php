<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteBackupPlan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $BackupPlanId
 * @property string|null $BackupPlanArn
 * @property \Aws\Api\DateTimeResult|null $DeletionDate
 * @property string|null $VersionId
 */
class DeleteBackupPlanResponse extends Response
{
}

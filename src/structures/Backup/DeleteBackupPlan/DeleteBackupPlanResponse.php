<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteBackupPlan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $BackupPlanId
 * @property string $BackupPlanArn
 * @property \Aws\Api\DateTimeResult $DeletionDate
 * @property string $VersionId
 */
class DeleteBackupPlanResponse extends Response
{
}

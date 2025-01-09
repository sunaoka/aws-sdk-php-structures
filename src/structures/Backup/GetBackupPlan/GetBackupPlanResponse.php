<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupPlan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\BackupPlan $BackupPlan
 * @property string $BackupPlanId
 * @property string $BackupPlanArn
 * @property string $VersionId
 * @property string $CreatorRequestId
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $DeletionDate
 * @property \Aws\Api\DateTimeResult $LastExecutionDate
 * @property list<Shapes\AdvancedBackupSetting> $AdvancedBackupSettings
 */
class GetBackupPlanResponse extends Response
{
}

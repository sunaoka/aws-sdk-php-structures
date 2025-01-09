<?php

namespace Sunaoka\Aws\Structures\Backup\CreateBackupPlan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $BackupPlanId
 * @property string $BackupPlanArn
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property string $VersionId
 * @property list<Shapes\AdvancedBackupSetting> $AdvancedBackupSettings
 */
class CreateBackupPlanResponse extends Response
{
}

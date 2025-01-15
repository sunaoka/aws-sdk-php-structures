<?php

namespace Sunaoka\Aws\Structures\Backup\CreateBackupPlan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $BackupPlanId
 * @property string|null $BackupPlanArn
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property string|null $VersionId
 * @property list<Shapes\AdvancedBackupSetting>|null $AdvancedBackupSettings
 */
class CreateBackupPlanResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupPlan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\BackupPlan|null $BackupPlan
 * @property string|null $BackupPlanId
 * @property string|null $BackupPlanArn
 * @property string|null $VersionId
 * @property string|null $CreatorRequestId
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $DeletionDate
 * @property \Aws\Api\DateTimeResult|null $LastExecutionDate
 * @property list<Shapes\AdvancedBackupSetting>|null $AdvancedBackupSettings
 * @property list<Shapes\ScheduledPlanExecutionMember>|null $ScheduledRunsPreview
 */
class GetBackupPlanResponse extends Response
{
}

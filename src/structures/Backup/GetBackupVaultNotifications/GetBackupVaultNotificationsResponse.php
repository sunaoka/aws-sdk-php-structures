<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupVaultNotifications;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $BackupVaultName
 * @property string|null $BackupVaultArn
 * @property string|null $SNSTopicArn
 * @property list<'BACKUP_JOB_STARTED'|'BACKUP_JOB_COMPLETED'|'BACKUP_JOB_SUCCESSFUL'|'BACKUP_JOB_FAILED'|'BACKUP_JOB_EXPIRED'|'RESTORE_JOB_STARTED'|'RESTORE_JOB_COMPLETED'|'RESTORE_JOB_SUCCESSFUL'|'RESTORE_JOB_FAILED'|'COPY_JOB_STARTED'|'COPY_JOB_SUCCESSFUL'|'COPY_JOB_FAILED'|'RECOVERY_POINT_MODIFIED'|'BACKUP_PLAN_CREATED'|'BACKUP_PLAN_MODIFIED'|'S3_BACKUP_OBJECT_FAILED'|'S3_RESTORE_OBJECT_FAILED'|'RECOVERY_POINT_INDEX_COMPLETED'|'RECOVERY_POINT_INDEX_DELETED'|'RECOVERY_POINT_INDEXING_FAILED'>|null $BackupVaultEvents
 */
class GetBackupVaultNotificationsResponse extends Response
{
}

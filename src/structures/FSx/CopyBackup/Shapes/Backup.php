<?php

namespace Sunaoka\Aws\Structures\FSx\CopyBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BackupId
 * @property 'AVAILABLE'|'CREATING'|'TRANSFERRING'|'DELETED'|'FAILED'|'PENDING'|'COPYING' $Lifecycle
 * @property BackupFailureDetails|null $FailureDetails
 * @property 'AUTOMATIC'|'USER_INITIATED'|'AWS_BACKUP' $Type
 * @property int<0, 100>|null $ProgressPercent
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string|null $KmsKeyId
 * @property string|null $ResourceARN
 * @property list<Tag>|null $Tags
 * @property FileSystem $FileSystem
 * @property ActiveDirectoryBackupAttributes|null $DirectoryInformation
 * @property string|null $OwnerId
 * @property string|null $SourceBackupId
 * @property string|null $SourceBackupRegion
 * @property 'FILE_SYSTEM'|'VOLUME'|null $ResourceType
 * @property Volume|null $Volume
 * @property int<0, max>|null $SizeInBytes
 */
class Backup extends Shape
{
    /**
     * @param array{
     *     BackupId: string,
     *     Lifecycle: 'AVAILABLE'|'CREATING'|'TRANSFERRING'|'DELETED'|'FAILED'|'PENDING'|'COPYING',
     *     FailureDetails?: BackupFailureDetails|null,
     *     Type: 'AUTOMATIC'|'USER_INITIATED'|'AWS_BACKUP',
     *     ProgressPercent?: int<0, 100>|null,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     KmsKeyId?: string|null,
     *     ResourceARN?: string|null,
     *     Tags?: list<Tag>|null,
     *     FileSystem: FileSystem,
     *     DirectoryInformation?: ActiveDirectoryBackupAttributes|null,
     *     OwnerId?: string|null,
     *     SourceBackupId?: string|null,
     *     SourceBackupRegion?: string|null,
     *     ResourceType?: 'FILE_SYSTEM'|'VOLUME'|null,
     *     Volume?: Volume|null,
     *     SizeInBytes?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

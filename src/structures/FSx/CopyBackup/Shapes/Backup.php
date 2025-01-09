<?php

namespace Sunaoka\Aws\Structures\FSx\CopyBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BackupId
 * @property 'AVAILABLE'|'CREATING'|'TRANSFERRING'|'DELETED'|'FAILED'|'PENDING'|'COPYING' $Lifecycle
 * @property BackupFailureDetails $FailureDetails
 * @property 'AUTOMATIC'|'USER_INITIATED'|'AWS_BACKUP' $Type
 * @property int $ProgressPercent
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $KmsKeyId
 * @property string $ResourceARN
 * @property list<Tag> $Tags
 * @property FileSystem $FileSystem
 * @property ActiveDirectoryBackupAttributes $DirectoryInformation
 * @property string $OwnerId
 * @property string $SourceBackupId
 * @property string $SourceBackupRegion
 * @property 'FILE_SYSTEM'|'VOLUME' $ResourceType
 * @property Volume $Volume
 * @property int $SizeInBytes
 */
class Backup extends Shape
{
    /**
     * @param array{
     *     BackupId: string,
     *     Lifecycle: 'AVAILABLE'|'CREATING'|'TRANSFERRING'|'DELETED'|'FAILED'|'PENDING'|'COPYING',
     *     FailureDetails?: BackupFailureDetails,
     *     Type: 'AUTOMATIC'|'USER_INITIATED'|'AWS_BACKUP',
     *     ProgressPercent?: int,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     KmsKeyId?: string,
     *     ResourceARN?: string,
     *     Tags?: list<Tag>,
     *     FileSystem: FileSystem,
     *     DirectoryInformation?: ActiveDirectoryBackupAttributes,
     *     OwnerId?: string,
     *     SourceBackupId?: string,
     *     SourceBackupRegion?: string,
     *     ResourceType?: 'FILE_SYSTEM'|'VOLUME',
     *     Volume?: Volume,
     *     SizeInBytes?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

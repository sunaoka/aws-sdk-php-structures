<?php

namespace Sunaoka\Aws\Structures\FSx\CopyBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FILE_SYSTEM_UPDATE'|'STORAGE_OPTIMIZATION'|'FILE_SYSTEM_ALIAS_ASSOCIATION'|'FILE_SYSTEM_ALIAS_DISASSOCIATION'|'VOLUME_UPDATE'|'SNAPSHOT_UPDATE'|'RELEASE_NFS_V3_LOCKS'|'VOLUME_RESTORE'|'THROUGHPUT_OPTIMIZATION'|'IOPS_OPTIMIZATION'|'STORAGE_TYPE_OPTIMIZATION'|'MISCONFIGURED_STATE_RECOVERY'|'VOLUME_UPDATE_WITH_SNAPSHOT'|'VOLUME_INITIALIZE_WITH_SNAPSHOT'|'DOWNLOAD_DATA_FROM_BACKUP' $AdministrativeActionType
 * @property int<0, 100> $ProgressPercent
 * @property \Aws\Api\DateTimeResult $RequestTime
 * @property 'FAILED'|'IN_PROGRESS'|'PENDING'|'COMPLETED'|'UPDATED_OPTIMIZING'|'OPTIMIZING' $Status
 * @property FileSystem $TargetFileSystemValues
 * @property AdministrativeActionFailureDetails $FailureDetails
 * @property Volume $TargetVolumeValues
 * @property Snapshot $TargetSnapshotValues
 * @property int<0, max> $TotalTransferBytes
 * @property int<0, max> $RemainingTransferBytes
 */
class AdministrativeAction extends Shape
{
    /**
     * @param array{
     *     AdministrativeActionType?: 'FILE_SYSTEM_UPDATE'|'STORAGE_OPTIMIZATION'|'FILE_SYSTEM_ALIAS_ASSOCIATION'|'FILE_SYSTEM_ALIAS_DISASSOCIATION'|'VOLUME_UPDATE'|'SNAPSHOT_UPDATE'|'RELEASE_NFS_V3_LOCKS'|'VOLUME_RESTORE'|'THROUGHPUT_OPTIMIZATION'|'IOPS_OPTIMIZATION'|'STORAGE_TYPE_OPTIMIZATION'|'MISCONFIGURED_STATE_RECOVERY'|'VOLUME_UPDATE_WITH_SNAPSHOT'|'VOLUME_INITIALIZE_WITH_SNAPSHOT'|'DOWNLOAD_DATA_FROM_BACKUP',
     *     ProgressPercent?: int<0, 100>,
     *     RequestTime?: \Aws\Api\DateTimeResult,
     *     Status?: 'FAILED'|'IN_PROGRESS'|'PENDING'|'COMPLETED'|'UPDATED_OPTIMIZING'|'OPTIMIZING',
     *     TargetFileSystemValues?: FileSystem,
     *     FailureDetails?: AdministrativeActionFailureDetails,
     *     TargetVolumeValues?: Volume,
     *     TargetSnapshotValues?: Snapshot,
     *     TotalTransferBytes?: int<0, max>,
     *     RemainingTransferBytes?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

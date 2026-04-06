<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileSystemFromBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FILE_SYSTEM_UPDATE'|'STORAGE_OPTIMIZATION'|'FILE_SYSTEM_ALIAS_ASSOCIATION'|'FILE_SYSTEM_ALIAS_DISASSOCIATION'|'VOLUME_UPDATE'|'SNAPSHOT_UPDATE'|'RELEASE_NFS_V3_LOCKS'|'VOLUME_RESTORE'|'THROUGHPUT_OPTIMIZATION'|'IOPS_OPTIMIZATION'|'STORAGE_TYPE_OPTIMIZATION'|null $AdministrativeActionType
 * @property int<0, 100>|null $ProgressPercent
 * @property \Aws\Api\DateTimeResult|null $RequestTime
 * @property 'FAILED'|'IN_PROGRESS'|'PENDING'|'COMPLETED'|'UPDATED_OPTIMIZING'|null $Status
 * @property FileSystem|null $TargetFileSystemValues
 * @property AdministrativeActionFailureDetails|null $FailureDetails
 * @property Volume|null $TargetVolumeValues
 * @property Snapshot|null $TargetSnapshotValues
 */
class AdministrativeAction extends Shape
{
    /**
     * @param array{
     *     AdministrativeActionType?: 'FILE_SYSTEM_UPDATE'|'STORAGE_OPTIMIZATION'|'FILE_SYSTEM_ALIAS_ASSOCIATION'|'FILE_SYSTEM_ALIAS_DISASSOCIATION'|'VOLUME_UPDATE'|'SNAPSHOT_UPDATE'|'RELEASE_NFS_V3_LOCKS'|'VOLUME_RESTORE'|'THROUGHPUT_OPTIMIZATION'|'IOPS_OPTIMIZATION'|'STORAGE_TYPE_OPTIMIZATION'|null,
     *     ProgressPercent?: int<0, 100>|null,
     *     RequestTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'FAILED'|'IN_PROGRESS'|'PENDING'|'COMPLETED'|'UPDATED_OPTIMIZING'|null,
     *     TargetFileSystemValues?: FileSystem|null,
     *     FailureDetails?: AdministrativeActionFailureDetails|null,
     *     TargetVolumeValues?: Volume|null,
     *     TargetSnapshotValues?: Snapshot|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

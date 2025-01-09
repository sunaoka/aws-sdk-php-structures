<?php

namespace Sunaoka\Aws\Structures\FSx\CopySnapshotAndUpdateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParentVolumeId
 * @property string $VolumePath
 * @property int $StorageCapacityReservationGiB
 * @property int $StorageCapacityQuotaGiB
 * @property int $RecordSizeKiB
 * @property 'NONE'|'ZSTD'|'LZ4' $DataCompressionType
 * @property bool $CopyTagsToSnapshots
 * @property OpenZFSOriginSnapshotConfiguration $OriginSnapshot
 * @property bool $ReadOnly
 * @property list<OpenZFSNfsExport> $NfsExports
 * @property list<OpenZFSUserOrGroupQuota> $UserAndGroupQuotas
 * @property string $RestoreToSnapshot
 * @property bool $DeleteIntermediateSnaphots
 * @property bool $DeleteClonedVolumes
 * @property bool $DeleteIntermediateData
 * @property string $SourceSnapshotARN
 * @property string $DestinationSnapshot
 * @property 'CLONE'|'FULL_COPY'|'INCREMENTAL_COPY' $CopyStrategy
 */
class OpenZFSVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     ParentVolumeId?: string,
     *     VolumePath?: string,
     *     StorageCapacityReservationGiB?: int,
     *     StorageCapacityQuotaGiB?: int,
     *     RecordSizeKiB?: int,
     *     DataCompressionType?: 'NONE'|'ZSTD'|'LZ4',
     *     CopyTagsToSnapshots?: bool,
     *     OriginSnapshot?: OpenZFSOriginSnapshotConfiguration,
     *     ReadOnly?: bool,
     *     NfsExports?: list<OpenZFSNfsExport>,
     *     UserAndGroupQuotas?: list<OpenZFSUserOrGroupQuota>,
     *     RestoreToSnapshot?: string,
     *     DeleteIntermediateSnaphots?: bool,
     *     DeleteClonedVolumes?: bool,
     *     DeleteIntermediateData?: bool,
     *     SourceSnapshotARN?: string,
     *     DestinationSnapshot?: string,
     *     CopyStrategy?: 'CLONE'|'FULL_COPY'|'INCREMENTAL_COPY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

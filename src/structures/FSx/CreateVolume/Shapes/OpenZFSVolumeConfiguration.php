<?php

namespace Sunaoka\Aws\Structures\FSx\CreateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParentVolumeId
 * @property string $VolumePath
 * @property int<0, 2147483647> $StorageCapacityReservationGiB
 * @property int<0, 2147483647> $StorageCapacityQuotaGiB
 * @property int<4, 4096> $RecordSizeKiB
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
     *     StorageCapacityReservationGiB?: int<0, 2147483647>,
     *     StorageCapacityQuotaGiB?: int<0, 2147483647>,
     *     RecordSizeKiB?: int<4, 4096>,
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

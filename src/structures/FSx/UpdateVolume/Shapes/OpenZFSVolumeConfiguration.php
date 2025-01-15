<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ParentVolumeId
 * @property string|null $VolumePath
 * @property int<0, 2147483647>|null $StorageCapacityReservationGiB
 * @property int<0, 2147483647>|null $StorageCapacityQuotaGiB
 * @property int<4, 4096>|null $RecordSizeKiB
 * @property 'NONE'|'ZSTD'|'LZ4'|null $DataCompressionType
 * @property bool|null $CopyTagsToSnapshots
 * @property OpenZFSOriginSnapshotConfiguration|null $OriginSnapshot
 * @property bool|null $ReadOnly
 * @property list<OpenZFSNfsExport>|null $NfsExports
 * @property list<OpenZFSUserOrGroupQuota>|null $UserAndGroupQuotas
 * @property string|null $RestoreToSnapshot
 * @property bool|null $DeleteIntermediateSnaphots
 * @property bool|null $DeleteClonedVolumes
 * @property bool|null $DeleteIntermediateData
 * @property string|null $SourceSnapshotARN
 * @property string|null $DestinationSnapshot
 * @property 'CLONE'|'FULL_COPY'|'INCREMENTAL_COPY'|null $CopyStrategy
 */
class OpenZFSVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     ParentVolumeId?: string|null,
     *     VolumePath?: string|null,
     *     StorageCapacityReservationGiB?: int<0, 2147483647>|null,
     *     StorageCapacityQuotaGiB?: int<0, 2147483647>|null,
     *     RecordSizeKiB?: int<4, 4096>|null,
     *     DataCompressionType?: 'NONE'|'ZSTD'|'LZ4'|null,
     *     CopyTagsToSnapshots?: bool|null,
     *     OriginSnapshot?: OpenZFSOriginSnapshotConfiguration|null,
     *     ReadOnly?: bool|null,
     *     NfsExports?: list<OpenZFSNfsExport>|null,
     *     UserAndGroupQuotas?: list<OpenZFSUserOrGroupQuota>|null,
     *     RestoreToSnapshot?: string|null,
     *     DeleteIntermediateSnaphots?: bool|null,
     *     DeleteClonedVolumes?: bool|null,
     *     DeleteIntermediateData?: bool|null,
     *     SourceSnapshotARN?: string|null,
     *     DestinationSnapshot?: string|null,
     *     CopyStrategy?: 'CLONE'|'FULL_COPY'|'INCREMENTAL_COPY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

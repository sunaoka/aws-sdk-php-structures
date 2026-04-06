<?php

namespace Sunaoka\Aws\Structures\FSx\CreateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParentVolumeId
 * @property int<-1, 2147483647>|null $StorageCapacityReservationGiB
 * @property int<-1, 2147483647>|null $StorageCapacityQuotaGiB
 * @property int<4, 4096>|null $RecordSizeKiB
 * @property 'NONE'|'ZSTD'|'LZ4'|null $DataCompressionType
 * @property bool|null $CopyTagsToSnapshots
 * @property CreateOpenZFSOriginSnapshotConfiguration|null $OriginSnapshot
 * @property bool|null $ReadOnly
 * @property list<OpenZFSNfsExport>|null $NfsExports
 * @property list<OpenZFSUserOrGroupQuota>|null $UserAndGroupQuotas
 */
class CreateOpenZFSVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     ParentVolumeId: string,
     *     StorageCapacityReservationGiB?: int<-1, 2147483647>|null,
     *     StorageCapacityQuotaGiB?: int<-1, 2147483647>|null,
     *     RecordSizeKiB?: int<4, 4096>|null,
     *     DataCompressionType?: 'NONE'|'ZSTD'|'LZ4'|null,
     *     CopyTagsToSnapshots?: bool|null,
     *     OriginSnapshot?: CreateOpenZFSOriginSnapshotConfiguration|null,
     *     ReadOnly?: bool|null,
     *     NfsExports?: list<OpenZFSNfsExport>|null,
     *     UserAndGroupQuotas?: list<OpenZFSUserOrGroupQuota>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\FSx\CreateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParentVolumeId
 * @property int<-1, 2147483647> $StorageCapacityReservationGiB
 * @property int<-1, 2147483647> $StorageCapacityQuotaGiB
 * @property int<4, 4096> $RecordSizeKiB
 * @property 'NONE'|'ZSTD'|'LZ4' $DataCompressionType
 * @property bool $CopyTagsToSnapshots
 * @property CreateOpenZFSOriginSnapshotConfiguration $OriginSnapshot
 * @property bool $ReadOnly
 * @property list<OpenZFSNfsExport> $NfsExports
 * @property list<OpenZFSUserOrGroupQuota> $UserAndGroupQuotas
 */
class CreateOpenZFSVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     ParentVolumeId: string,
     *     StorageCapacityReservationGiB?: int<-1, 2147483647>,
     *     StorageCapacityQuotaGiB?: int<-1, 2147483647>,
     *     RecordSizeKiB?: int<4, 4096>,
     *     DataCompressionType?: 'NONE'|'ZSTD'|'LZ4',
     *     CopyTagsToSnapshots?: bool,
     *     OriginSnapshot?: CreateOpenZFSOriginSnapshotConfiguration,
     *     ReadOnly?: bool,
     *     NfsExports?: list<OpenZFSNfsExport>,
     *     UserAndGroupQuotas?: list<OpenZFSUserOrGroupQuota>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

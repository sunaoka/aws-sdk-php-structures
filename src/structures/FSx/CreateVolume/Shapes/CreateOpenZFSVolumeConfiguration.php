<?php

namespace Sunaoka\Aws\Structures\FSx\CreateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParentVolumeId
 * @property int $StorageCapacityReservationGiB
 * @property int $StorageCapacityQuotaGiB
 * @property int $RecordSizeKiB
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
     *     StorageCapacityReservationGiB?: int,
     *     StorageCapacityQuotaGiB?: int,
     *     RecordSizeKiB?: int,
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

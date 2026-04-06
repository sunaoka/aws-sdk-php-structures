<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<-1, 2147483647>|null $StorageCapacityReservationGiB
 * @property int<-1, 2147483647>|null $StorageCapacityQuotaGiB
 * @property int<4, 4096>|null $RecordSizeKiB
 * @property 'NONE'|'ZSTD'|'LZ4'|null $DataCompressionType
 * @property list<OpenZFSNfsExport>|null $NfsExports
 * @property list<OpenZFSUserOrGroupQuota>|null $UserAndGroupQuotas
 * @property bool|null $ReadOnly
 */
class UpdateOpenZFSVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     StorageCapacityReservationGiB?: int<-1, 2147483647>|null,
     *     StorageCapacityQuotaGiB?: int<-1, 2147483647>|null,
     *     RecordSizeKiB?: int<4, 4096>|null,
     *     DataCompressionType?: 'NONE'|'ZSTD'|'LZ4'|null,
     *     NfsExports?: list<OpenZFSNfsExport>|null,
     *     UserAndGroupQuotas?: list<OpenZFSUserOrGroupQuota>|null,
     *     ReadOnly?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

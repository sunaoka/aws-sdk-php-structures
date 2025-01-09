<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<-1, 2147483647> $StorageCapacityReservationGiB
 * @property int<-1, 2147483647> $StorageCapacityQuotaGiB
 * @property int<4, 4096> $RecordSizeKiB
 * @property 'NONE'|'ZSTD'|'LZ4' $DataCompressionType
 * @property list<OpenZFSNfsExport> $NfsExports
 * @property list<OpenZFSUserOrGroupQuota> $UserAndGroupQuotas
 * @property bool $ReadOnly
 */
class UpdateOpenZFSVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     StorageCapacityReservationGiB?: int<-1, 2147483647>,
     *     StorageCapacityQuotaGiB?: int<-1, 2147483647>,
     *     RecordSizeKiB?: int<4, 4096>,
     *     DataCompressionType?: 'NONE'|'ZSTD'|'LZ4',
     *     NfsExports?: list<OpenZFSNfsExport>,
     *     UserAndGroupQuotas?: list<OpenZFSUserOrGroupQuota>,
     *     ReadOnly?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

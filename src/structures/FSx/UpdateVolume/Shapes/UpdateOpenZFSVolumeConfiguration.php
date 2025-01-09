<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $StorageCapacityReservationGiB
 * @property int $StorageCapacityQuotaGiB
 * @property int $RecordSizeKiB
 * @property 'NONE'|'ZSTD'|'LZ4' $DataCompressionType
 * @property list<OpenZFSNfsExport> $NfsExports
 * @property list<OpenZFSUserOrGroupQuota> $UserAndGroupQuotas
 * @property bool $ReadOnly
 */
class UpdateOpenZFSVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     StorageCapacityReservationGiB?: int,
     *     StorageCapacityQuotaGiB?: int,
     *     RecordSizeKiB?: int,
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

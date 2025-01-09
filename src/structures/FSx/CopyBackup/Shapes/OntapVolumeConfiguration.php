<?php

namespace Sunaoka\Aws\Structures\FSx\CopyBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'ORIGIN'|'CACHE' $FlexCacheEndpointType
 * @property string $JunctionPath
 * @property 'UNIX'|'NTFS'|'MIXED' $SecurityStyle
 * @property int $SizeInMegabytes
 * @property bool $StorageEfficiencyEnabled
 * @property string $StorageVirtualMachineId
 * @property bool $StorageVirtualMachineRoot
 * @property TieringPolicy $TieringPolicy
 * @property string $UUID
 * @property 'RW'|'DP'|'LS' $OntapVolumeType
 * @property string $SnapshotPolicy
 * @property bool $CopyTagsToBackups
 * @property SnaplockConfiguration $SnaplockConfiguration
 * @property 'FLEXVOL'|'FLEXGROUP' $VolumeStyle
 * @property AggregateConfiguration $AggregateConfiguration
 * @property int $SizeInBytes
 */
class OntapVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     FlexCacheEndpointType?: 'NONE'|'ORIGIN'|'CACHE',
     *     JunctionPath?: string,
     *     SecurityStyle?: 'UNIX'|'NTFS'|'MIXED',
     *     SizeInMegabytes?: int,
     *     StorageEfficiencyEnabled?: bool,
     *     StorageVirtualMachineId?: string,
     *     StorageVirtualMachineRoot?: bool,
     *     TieringPolicy?: TieringPolicy,
     *     UUID?: string,
     *     OntapVolumeType?: 'RW'|'DP'|'LS',
     *     SnapshotPolicy?: string,
     *     CopyTagsToBackups?: bool,
     *     SnaplockConfiguration?: SnaplockConfiguration,
     *     VolumeStyle?: 'FLEXVOL'|'FLEXGROUP',
     *     AggregateConfiguration?: AggregateConfiguration,
     *     SizeInBytes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

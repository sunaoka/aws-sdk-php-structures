<?php

namespace Sunaoka\Aws\Structures\FSx\CreateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JunctionPath
 * @property 'UNIX'|'NTFS'|'MIXED'|null $SecurityStyle
 * @property int<0, 2147483647>|null $SizeInMegabytes
 * @property bool|null $StorageEfficiencyEnabled
 * @property string $StorageVirtualMachineId
 * @property TieringPolicy|null $TieringPolicy
 * @property 'RW'|'DP'|null $OntapVolumeType
 * @property string|null $SnapshotPolicy
 * @property bool|null $CopyTagsToBackups
 * @property CreateSnaplockConfiguration|null $SnaplockConfiguration
 * @property 'FLEXVOL'|'FLEXGROUP'|null $VolumeStyle
 * @property CreateAggregateConfiguration|null $AggregateConfiguration
 * @property int<0, 22517998000000000>|null $SizeInBytes
 */
class CreateOntapVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     JunctionPath?: string|null,
     *     SecurityStyle?: 'UNIX'|'NTFS'|'MIXED'|null,
     *     SizeInMegabytes?: int<0, 2147483647>|null,
     *     StorageEfficiencyEnabled?: bool|null,
     *     StorageVirtualMachineId: string,
     *     TieringPolicy?: TieringPolicy|null,
     *     OntapVolumeType?: 'RW'|'DP'|null,
     *     SnapshotPolicy?: string|null,
     *     CopyTagsToBackups?: bool|null,
     *     SnaplockConfiguration?: CreateSnaplockConfiguration|null,
     *     VolumeStyle?: 'FLEXVOL'|'FLEXGROUP'|null,
     *     AggregateConfiguration?: CreateAggregateConfiguration|null,
     *     SizeInBytes?: int<0, 22517998000000000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

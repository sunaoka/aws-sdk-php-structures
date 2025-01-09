<?php

namespace Sunaoka\Aws\Structures\FSx\CreateVolumeFromBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JunctionPath
 * @property 'UNIX'|'NTFS'|'MIXED' $SecurityStyle
 * @property int $SizeInMegabytes
 * @property bool $StorageEfficiencyEnabled
 * @property string $StorageVirtualMachineId
 * @property TieringPolicy $TieringPolicy
 * @property 'RW'|'DP' $OntapVolumeType
 * @property string $SnapshotPolicy
 * @property bool $CopyTagsToBackups
 * @property CreateSnaplockConfiguration $SnaplockConfiguration
 * @property 'FLEXVOL'|'FLEXGROUP' $VolumeStyle
 * @property CreateAggregateConfiguration $AggregateConfiguration
 * @property int $SizeInBytes
 */
class CreateOntapVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     JunctionPath?: string,
     *     SecurityStyle?: 'UNIX'|'NTFS'|'MIXED',
     *     SizeInMegabytes?: int,
     *     StorageEfficiencyEnabled?: bool,
     *     StorageVirtualMachineId: string,
     *     TieringPolicy?: TieringPolicy,
     *     OntapVolumeType?: 'RW'|'DP',
     *     SnapshotPolicy?: string,
     *     CopyTagsToBackups?: bool,
     *     SnaplockConfiguration?: CreateSnaplockConfiguration,
     *     VolumeStyle?: 'FLEXVOL'|'FLEXGROUP',
     *     AggregateConfiguration?: CreateAggregateConfiguration,
     *     SizeInBytes?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

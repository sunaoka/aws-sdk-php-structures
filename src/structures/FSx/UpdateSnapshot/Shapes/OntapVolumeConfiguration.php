<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'ORIGIN'|'CACHE'|null $FlexCacheEndpointType
 * @property string|null $JunctionPath
 * @property 'UNIX'|'NTFS'|'MIXED'|null $SecurityStyle
 * @property int<0, 314572800>|null $SizeInMegabytes
 * @property bool|null $StorageEfficiencyEnabled
 * @property string|null $StorageVirtualMachineId
 * @property bool|null $StorageVirtualMachineRoot
 * @property TieringPolicy|null $TieringPolicy
 * @property string|null $UUID
 * @property 'RW'|'DP'|'LS'|null $OntapVolumeType
 * @property string|null $SnapshotPolicy
 * @property bool|null $CopyTagsToBackups
 * @property SnaplockConfiguration|null $SnaplockConfiguration
 */
class OntapVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     FlexCacheEndpointType?: 'NONE'|'ORIGIN'|'CACHE'|null,
     *     JunctionPath?: string|null,
     *     SecurityStyle?: 'UNIX'|'NTFS'|'MIXED'|null,
     *     SizeInMegabytes?: int<0, 314572800>|null,
     *     StorageEfficiencyEnabled?: bool|null,
     *     StorageVirtualMachineId?: string|null,
     *     StorageVirtualMachineRoot?: bool|null,
     *     TieringPolicy?: TieringPolicy|null,
     *     UUID?: string|null,
     *     OntapVolumeType?: 'RW'|'DP'|'LS'|null,
     *     SnapshotPolicy?: string|null,
     *     CopyTagsToBackups?: bool|null,
     *     SnaplockConfiguration?: SnaplockConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

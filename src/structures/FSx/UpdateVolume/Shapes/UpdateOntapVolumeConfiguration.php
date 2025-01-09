<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JunctionPath
 * @property 'UNIX'|'NTFS'|'MIXED' $SecurityStyle
 * @property int<0, 2147483647> $SizeInMegabytes
 * @property bool $StorageEfficiencyEnabled
 * @property TieringPolicy $TieringPolicy
 * @property string $SnapshotPolicy
 * @property bool $CopyTagsToBackups
 * @property UpdateSnaplockConfiguration $SnaplockConfiguration
 * @property int<0, 22517998000000000> $SizeInBytes
 */
class UpdateOntapVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     JunctionPath?: string,
     *     SecurityStyle?: 'UNIX'|'NTFS'|'MIXED',
     *     SizeInMegabytes?: int<0, 2147483647>,
     *     StorageEfficiencyEnabled?: bool,
     *     TieringPolicy?: TieringPolicy,
     *     SnapshotPolicy?: string,
     *     CopyTagsToBackups?: bool,
     *     SnaplockConfiguration?: UpdateSnaplockConfiguration,
     *     SizeInBytes?: int<0, 22517998000000000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

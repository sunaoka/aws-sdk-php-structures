<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JunctionPath
 * @property 'UNIX'|'NTFS'|'MIXED' $SecurityStyle
 * @property int $SizeInMegabytes
 * @property bool $StorageEfficiencyEnabled
 * @property TieringPolicy $TieringPolicy
 * @property string $SnapshotPolicy
 * @property bool $CopyTagsToBackups
 * @property UpdateSnaplockConfiguration $SnaplockConfiguration
 * @property int $SizeInBytes
 */
class UpdateOntapVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     JunctionPath?: string,
     *     SecurityStyle?: 'UNIX'|'NTFS'|'MIXED',
     *     SizeInMegabytes?: int,
     *     StorageEfficiencyEnabled?: bool,
     *     TieringPolicy?: TieringPolicy,
     *     SnapshotPolicy?: string,
     *     CopyTagsToBackups?: bool,
     *     SnaplockConfiguration?: UpdateSnaplockConfiguration,
     *     SizeInBytes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

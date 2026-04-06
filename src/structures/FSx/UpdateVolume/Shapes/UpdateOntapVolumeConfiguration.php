<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JunctionPath
 * @property 'UNIX'|'NTFS'|'MIXED'|null $SecurityStyle
 * @property int<0, 314572800>|null $SizeInMegabytes
 * @property bool|null $StorageEfficiencyEnabled
 * @property TieringPolicy|null $TieringPolicy
 * @property string|null $SnapshotPolicy
 * @property bool|null $CopyTagsToBackups
 * @property UpdateSnaplockConfiguration|null $SnaplockConfiguration
 */
class UpdateOntapVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     JunctionPath?: string|null,
     *     SecurityStyle?: 'UNIX'|'NTFS'|'MIXED'|null,
     *     SizeInMegabytes?: int<0, 314572800>|null,
     *     StorageEfficiencyEnabled?: bool|null,
     *     TieringPolicy?: TieringPolicy|null,
     *     SnapshotPolicy?: string|null,
     *     CopyTagsToBackups?: bool|null,
     *     SnaplockConfiguration?: UpdateSnaplockConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

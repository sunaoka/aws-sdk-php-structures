<?php

namespace Sunaoka\Aws\Structures\FSx\CreateVolumeFromBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParentVolumeId
 * @property string|null $SnapshotId
 */
class CreateCloneConfiguration extends Shape
{
    /**
     * @param array{
     *     ParentVolumeId: string,
     *     SnapshotId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

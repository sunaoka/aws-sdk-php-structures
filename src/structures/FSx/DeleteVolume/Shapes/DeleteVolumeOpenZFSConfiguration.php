<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'DELETE_CHILD_VOLUMES_AND_SNAPSHOTS'>|null $Options
 */
class DeleteVolumeOpenZFSConfiguration extends Shape
{
    /**
     * @param array{Options?: list<'DELETE_CHILD_VOLUMES_AND_SNAPSHOTS'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateSnapmirrorRelationship\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Path
 * @property string|null $VolumeId
 */
class SnapmirrorDestination extends Shape
{
    /**
     * @param array{
     *     Path?: string|null,
     *     VolumeId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

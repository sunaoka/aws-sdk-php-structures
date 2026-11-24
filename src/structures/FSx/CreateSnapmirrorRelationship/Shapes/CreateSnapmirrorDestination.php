<?php

namespace Sunaoka\Aws\Structures\FSx\CreateSnapmirrorRelationship\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VolumeId
 */
class CreateSnapmirrorDestination extends Shape
{
    /**
     * @param array{VolumeId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\FSx\CreateSnapmirrorRelationship\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Path
 */
class CreateSnapmirrorSource extends Shape
{
    /**
     * @param array{Path: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

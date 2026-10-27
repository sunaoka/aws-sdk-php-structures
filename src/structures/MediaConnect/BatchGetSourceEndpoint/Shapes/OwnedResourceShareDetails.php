<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetSourceEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SHARED'|'UNSHARED' $ShareState
 */
class OwnedResourceShareDetails extends Shape
{
    /**
     * @param array{ShareState: 'SHARED'|'UNSHARED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

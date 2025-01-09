<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListGroupResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING' $Name
 */
class ResourceStatus extends Shape
{
    /**
     * @param array{Name?: 'PENDING'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

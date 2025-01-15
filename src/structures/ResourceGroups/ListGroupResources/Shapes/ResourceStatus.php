<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListGroupResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|null $Name
 */
class ResourceStatus extends Shape
{
    /**
     * @param array{Name?: 'PENDING'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

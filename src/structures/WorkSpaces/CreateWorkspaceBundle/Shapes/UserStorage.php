<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspaceBundle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Capacity
 */
class UserStorage extends Shape
{
    /**
     * @param array{Capacity: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

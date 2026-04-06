<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspacesPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $DesiredUserSessions
 */
class Capacity extends Shape
{
    /**
     * @param array{DesiredUserSessions: int<0, max>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspacesPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $AvailableUserSessions
 * @property int<0, max> $DesiredUserSessions
 * @property int<0, max> $ActualUserSessions
 * @property int<0, max> $ActiveUserSessions
 */
class CapacityStatus extends Shape
{
    /**
     * @param array{
     *     AvailableUserSessions: int<0, max>,
     *     DesiredUserSessions: int<0, max>,
     *     ActualUserSessions: int<0, max>,
     *     ActiveUserSessions: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

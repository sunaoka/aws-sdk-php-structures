<?php

namespace Sunaoka\Aws\Structures\CleanRooms\StartProtectedJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProtectedJobMemberOutputConfigurationInput|null $member
 */
class ProtectedJobOutputConfigurationInput extends Shape
{
    /**
     * @param array{member?: ProtectedJobMemberOutputConfigurationInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

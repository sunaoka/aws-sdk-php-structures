<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateCollaborationChangeRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MemberChangeSpecification|null $member
 */
class ChangeSpecification extends Shape
{
    /**
     * @param array{member?: MemberChangeSpecification|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

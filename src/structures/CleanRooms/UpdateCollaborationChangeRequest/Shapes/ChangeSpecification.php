<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateCollaborationChangeRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MemberChangeSpecification|null $member
 * @property CollaborationChangeSpecification|null $collaboration
 */
class ChangeSpecification extends Shape
{
    /**
     * @param array{
     *     member?: MemberChangeSpecification|null,
     *     collaboration?: CollaborationChangeSpecification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

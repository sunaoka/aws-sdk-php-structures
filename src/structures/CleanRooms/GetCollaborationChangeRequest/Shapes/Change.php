<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetCollaborationChangeRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MEMBER' $specificationType
 * @property ChangeSpecification $specification
 * @property list<'ADD_MEMBER'> $types
 */
class Change extends Shape
{
    /**
     * @param array{
     *     specificationType: 'MEMBER',
     *     specification: ChangeSpecification,
     *     types: list<'ADD_MEMBER'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

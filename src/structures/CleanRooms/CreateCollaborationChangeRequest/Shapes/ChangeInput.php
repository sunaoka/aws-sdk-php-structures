<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateCollaborationChangeRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MEMBER' $specificationType
 * @property ChangeSpecification $specification
 */
class ChangeInput extends Shape
{
    /**
     * @param array{
     *     specificationType: 'MEMBER',
     *     specification: ChangeSpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

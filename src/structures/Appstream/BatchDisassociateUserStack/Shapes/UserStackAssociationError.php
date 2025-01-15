<?php

namespace Sunaoka\Aws\Structures\Appstream\BatchDisassociateUserStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UserStackAssociation|null $UserStackAssociation
 * @property 'STACK_NOT_FOUND'|'USER_NAME_NOT_FOUND'|'DIRECTORY_NOT_FOUND'|'INTERNAL_ERROR'|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class UserStackAssociationError extends Shape
{
    /**
     * @param array{
     *     UserStackAssociation?: UserStackAssociation|null,
     *     ErrorCode?: 'STACK_NOT_FOUND'|'USER_NAME_NOT_FOUND'|'DIRECTORY_NOT_FOUND'|'INTERNAL_ERROR'|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

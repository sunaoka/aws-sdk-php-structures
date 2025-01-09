<?php

namespace Sunaoka\Aws\Structures\Appstream\BatchDisassociateUserStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UserStackAssociation $UserStackAssociation
 * @property 'STACK_NOT_FOUND'|'USER_NAME_NOT_FOUND'|'DIRECTORY_NOT_FOUND'|'INTERNAL_ERROR' $ErrorCode
 * @property string $ErrorMessage
 */
class UserStackAssociationError extends Shape
{
    /**
     * @param array{
     *     UserStackAssociation?: UserStackAssociation,
     *     ErrorCode?: 'STACK_NOT_FOUND'|'USER_NAME_NOT_FOUND'|'DIRECTORY_NOT_FOUND'|'INTERNAL_ERROR',
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

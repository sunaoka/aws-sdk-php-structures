<?php

namespace Sunaoka\Aws\Structures\Appstream\BatchDisassociateUserStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\UserStackAssociation> $UserStackAssociations
 */
class BatchDisassociateUserStackRequest extends Request
{
    /**
     * @param array{UserStackAssociations: list<Shapes\UserStackAssociation>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

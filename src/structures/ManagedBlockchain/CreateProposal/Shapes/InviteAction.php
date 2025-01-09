<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateProposal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Principal
 */
class InviteAction extends Shape
{
    /**
     * @param array{Principal: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

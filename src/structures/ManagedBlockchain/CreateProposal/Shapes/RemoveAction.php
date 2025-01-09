<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateProposal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MemberId
 */
class RemoveAction extends Shape
{
    /**
     * @param array{MemberId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

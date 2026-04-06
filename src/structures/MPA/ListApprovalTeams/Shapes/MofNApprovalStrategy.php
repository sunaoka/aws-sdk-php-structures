<?php

namespace Sunaoka\Aws\Structures\MPA\ListApprovalTeams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $MinApprovalsRequired
 */
class MofNApprovalStrategy extends Shape
{
    /**
     * @param array{MinApprovalsRequired: int<1, max>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MPA\ListApprovalTeams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MofNApprovalStrategy|null $MofN
 */
class ApprovalStrategyResponse extends Shape
{
    /**
     * @param array{MofN?: MofNApprovalStrategy|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

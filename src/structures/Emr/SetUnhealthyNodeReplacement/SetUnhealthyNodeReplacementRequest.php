<?php

namespace Sunaoka\Aws\Structures\Emr\SetUnhealthyNodeReplacement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $JobFlowIds
 * @property bool $UnhealthyNodeReplacement
 */
class SetUnhealthyNodeReplacementRequest extends Request
{
    /**
     * @param array{
     *     JobFlowIds: list<string>,
     *     UnhealthyNodeReplacement: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

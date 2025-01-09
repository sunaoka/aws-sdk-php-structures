<?php

namespace Sunaoka\Aws\Structures\Emr\TerminateJobFlows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $JobFlowIds
 */
class TerminateJobFlowsRequest extends Request
{
    /**
     * @param array{JobFlowIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

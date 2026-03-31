<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetAgentSpaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $agentSpaceIds
 */
class BatchGetAgentSpacesRequest extends Request
{
    /**
     * @param array{agentSpaceIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

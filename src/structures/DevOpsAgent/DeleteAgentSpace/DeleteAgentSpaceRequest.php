<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\DeleteAgentSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 */
class DeleteAgentSpaceRequest extends Request
{
    /**
     * @param array{agentSpaceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetAgentSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 */
class GetAgentSpaceRequest extends Request
{
    /**
     * @param array{agentSpaceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

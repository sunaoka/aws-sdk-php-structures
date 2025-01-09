<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 */
class GetAgentRequest extends Request
{
    /**
     * @param array{agentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

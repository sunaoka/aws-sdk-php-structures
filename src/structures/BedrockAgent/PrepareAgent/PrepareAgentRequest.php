<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\PrepareAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 */
class PrepareAgentRequest extends Request
{
    /**
     * @param array{agentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

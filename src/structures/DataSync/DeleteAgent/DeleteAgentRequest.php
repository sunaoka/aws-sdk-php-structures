<?php

namespace Sunaoka\Aws\Structures\DataSync\DeleteAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AgentArn
 */
class DeleteAgentRequest extends Request
{
    /**
     * @param array{AgentArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

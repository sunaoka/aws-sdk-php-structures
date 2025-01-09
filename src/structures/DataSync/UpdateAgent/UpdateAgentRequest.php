<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AgentArn
 * @property string $Name
 */
class UpdateAgentRequest extends Request
{
    /**
     * @param array{
     *     AgentArn: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

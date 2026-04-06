<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentActionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $actionGroupId
 * @property string $agentId
 * @property string $agentVersion
 */
class GetAgentActionGroupRequest extends Request
{
    /**
     * @param array{
     *     actionGroupId: string,
     *     agentId: string,
     *     agentVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

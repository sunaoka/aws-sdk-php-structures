<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentActionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property string $agentVersion
 * @property string $actionGroupId
 */
class GetAgentActionGroupRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     agentVersion: string,
     *     actionGroupId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

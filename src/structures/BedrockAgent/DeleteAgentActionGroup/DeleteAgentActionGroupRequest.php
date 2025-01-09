<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteAgentActionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $actionGroupId
 * @property string $agentId
 * @property string $agentVersion
 * @property bool $skipResourceInUseCheck
 */
class DeleteAgentActionGroupRequest extends Request
{
    /**
     * @param array{
     *     actionGroupId: string,
     *     agentId: string,
     *     agentVersion: string,
     *     skipResourceInUseCheck?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

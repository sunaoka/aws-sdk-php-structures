<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteAgentActionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property string $agentVersion
 * @property string $actionGroupId
 * @property bool|null $skipResourceInUseCheck
 */
class DeleteAgentActionGroupRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     agentVersion: string,
     *     actionGroupId: string,
     *     skipResourceInUseCheck?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

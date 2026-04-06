<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property bool|null $skipResourceInUseCheck
 */
class DeleteAgentRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     skipResourceInUseCheck?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

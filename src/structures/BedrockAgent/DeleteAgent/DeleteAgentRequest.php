<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property bool $skipResourceInUseCheck
 */
class DeleteAgentRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     skipResourceInUseCheck?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

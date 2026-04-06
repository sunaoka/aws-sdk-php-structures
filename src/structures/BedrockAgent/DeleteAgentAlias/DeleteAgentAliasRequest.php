<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteAgentAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentAliasId
 * @property string $agentId
 */
class DeleteAgentAliasRequest extends Request
{
    /**
     * @param array{
     *     agentAliasId: string,
     *     agentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

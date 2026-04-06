<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteAgentAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property string $agentAliasId
 */
class DeleteAgentAliasRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     agentAliasId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

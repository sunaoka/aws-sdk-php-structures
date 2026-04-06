<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetAgentCard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $runtimeSessionId
 * @property string $agentRuntimeArn
 * @property string|null $qualifier
 */
class GetAgentCardRequest extends Request
{
    /**
     * @param array{
     *     runtimeSessionId?: string|null,
     *     agentRuntimeArn: string,
     *     qualifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

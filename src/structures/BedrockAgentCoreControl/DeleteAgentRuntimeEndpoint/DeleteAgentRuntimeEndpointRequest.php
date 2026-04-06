<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteAgentRuntimeEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentRuntimeId
 * @property string $endpointName
 * @property string|null $clientToken
 */
class DeleteAgentRuntimeEndpointRequest extends Request
{
    /**
     * @param array{
     *     agentRuntimeId: string,
     *     endpointName: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

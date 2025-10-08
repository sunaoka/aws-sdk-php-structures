<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetAgentRuntimeEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentRuntimeId
 * @property string $endpointName
 */
class GetAgentRuntimeEndpointRequest extends Request
{
    /**
     * @param array{
     *     agentRuntimeId: string,
     *     endpointName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

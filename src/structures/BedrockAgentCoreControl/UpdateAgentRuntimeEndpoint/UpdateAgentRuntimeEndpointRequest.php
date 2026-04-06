<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateAgentRuntimeEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentRuntimeId
 * @property string $endpointName
 * @property string|null $agentRuntimeVersion
 * @property string|null $description
 * @property string|null $clientToken
 */
class UpdateAgentRuntimeEndpointRequest extends Request
{
    /**
     * @param array{
     *     agentRuntimeId: string,
     *     endpointName: string,
     *     agentRuntimeVersion?: string|null,
     *     description?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

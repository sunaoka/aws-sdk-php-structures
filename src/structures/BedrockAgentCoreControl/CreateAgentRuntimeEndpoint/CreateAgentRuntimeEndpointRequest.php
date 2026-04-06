<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateAgentRuntimeEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentRuntimeId
 * @property string $name
 * @property string|null $agentRuntimeVersion
 * @property string|null $description
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateAgentRuntimeEndpointRequest extends Request
{
    /**
     * @param array{
     *     agentRuntimeId: string,
     *     name: string,
     *     agentRuntimeVersion?: string|null,
     *     description?: string|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

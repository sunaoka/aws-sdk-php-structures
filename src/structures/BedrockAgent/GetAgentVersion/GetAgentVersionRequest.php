<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property string $agentVersion
 */
class GetAgentVersionRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     agentVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteAgentVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property string $agentVersion
 * @property bool|null $skipResourceInUseCheck
 */
class DeleteAgentVersionRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     agentVersion: string,
     *     skipResourceInUseCheck?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

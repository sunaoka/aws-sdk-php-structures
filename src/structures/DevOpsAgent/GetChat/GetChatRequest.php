<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetChat;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $executionId
 */
class GetChatRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     executionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListPendingMessages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $executionId
 */
class ListPendingMessagesRequest extends Request
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

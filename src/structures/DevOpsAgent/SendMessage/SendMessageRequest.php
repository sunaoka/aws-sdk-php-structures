<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\SendMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $executionId
 * @property string $content
 * @property Shapes\SendMessageContext|null $context
 * @property string $userId
 */
class SendMessageRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     executionId: string,
     *     content: string,
     *     context?: Shapes\SendMessageContext|null,
     *     userId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

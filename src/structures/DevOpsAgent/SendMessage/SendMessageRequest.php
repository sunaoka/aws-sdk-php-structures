<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\SendMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $executionId
 * @property string $content
 * @property Shapes\SendMessageContext|null $context
 * @property string|null $userId
 * @property list<string>|null $assetIds
 */
class SendMessageRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     executionId: string,
     *     content: string,
     *     context?: Shapes\SendMessageContext|null,
     *     userId?: string|null,
     *     assetIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

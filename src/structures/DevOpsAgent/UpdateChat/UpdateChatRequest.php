<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateChat;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $executionId
 * @property string|null $summary
 * @property 'ACTIVE'|'ARCHIVED'|null $archiveStatus
 * @property string|null $clientToken
 */
class UpdateChatRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     executionId: string,
     *     summary?: string|null,
     *     archiveStatus?: 'ACTIVE'|'ARCHIVED'|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

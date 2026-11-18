<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateChat;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $executionId
 * @property string|null $summary
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'ACTIVE'|'ARCHIVED' $archiveStatus
 */
class UpdateChatResponse extends Response
{
}

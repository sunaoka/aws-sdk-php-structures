<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetChat;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $executionId
 * @property string|null $summary
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'ACTIVE'|'ARCHIVED' $archiveStatus
 */
class GetChatResponse extends Response
{
}

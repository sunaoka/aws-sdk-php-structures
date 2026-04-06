<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListPendingMessages;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $agentSpaceId
 * @property string $executionId
 * @property list<Shapes\PendingMessage> $messages
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class ListPendingMessagesResponse extends Response
{
}

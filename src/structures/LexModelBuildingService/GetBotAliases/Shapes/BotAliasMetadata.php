<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBotAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $description
 * @property string $botVersion
 * @property string $botName
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property string $checksum
 * @property ConversationLogsResponse $conversationLogs
 */
class BotAliasMetadata extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     description?: string,
     *     botVersion?: string,
     *     botName?: string,
     *     lastUpdatedDate?: \Aws\Api\DateTimeResult,
     *     createdDate?: \Aws\Api\DateTimeResult,
     *     checksum?: string,
     *     conversationLogs?: ConversationLogsResponse
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

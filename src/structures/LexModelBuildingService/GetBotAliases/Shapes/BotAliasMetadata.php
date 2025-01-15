<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBotAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $description
 * @property string|null $botVersion
 * @property string|null $botName
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDate
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property string|null $checksum
 * @property ConversationLogsResponse|null $conversationLogs
 */
class BotAliasMetadata extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     description?: string|null,
     *     botVersion?: string|null,
     *     botName?: string|null,
     *     lastUpdatedDate?: \Aws\Api\DateTimeResult|null,
     *     createdDate?: \Aws\Api\DateTimeResult|null,
     *     checksum?: string|null,
     *     conversationLogs?: ConversationLogsResponse|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

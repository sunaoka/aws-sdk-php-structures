<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $botId
 * @property string|null $botName
 * @property string|null $description
 * @property 'Creating'|'Available'|'Inactive'|'Deleting'|'Failed'|'Versioning'|'Importing'|'Updating'|null $botStatus
 * @property string|null $latestBotVersion
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property 'Bot'|'BotNetwork'|null $botType
 */
class BotSummary extends Shape
{
    /**
     * @param array{
     *     botId?: string|null,
     *     botName?: string|null,
     *     description?: string|null,
     *     botStatus?: 'Creating'|'Available'|'Inactive'|'Deleting'|'Failed'|'Versioning'|'Importing'|'Updating'|null,
     *     latestBotVersion?: string|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     botType?: 'Bot'|'BotNetwork'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

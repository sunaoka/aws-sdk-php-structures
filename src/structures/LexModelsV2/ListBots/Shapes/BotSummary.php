<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $botId
 * @property string $botName
 * @property string $description
 * @property 'Creating'|'Available'|'Inactive'|'Deleting'|'Failed'|'Versioning'|'Importing'|'Updating' $botStatus
 * @property string $latestBotVersion
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property 'Bot'|'BotNetwork' $botType
 */
class BotSummary extends Shape
{
    /**
     * @param array{
     *     botId?: string,
     *     botName?: string,
     *     description?: string,
     *     botStatus?: 'Creating'|'Available'|'Inactive'|'Deleting'|'Failed'|'Versioning'|'Importing'|'Updating',
     *     latestBotVersion?: string,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     botType?: 'Bot'|'BotNetwork'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

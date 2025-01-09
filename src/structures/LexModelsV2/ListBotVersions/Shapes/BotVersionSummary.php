<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $botName
 * @property string $botVersion
 * @property string $description
 * @property 'Creating'|'Available'|'Inactive'|'Deleting'|'Failed'|'Versioning'|'Importing'|'Updating' $botStatus
 * @property \Aws\Api\DateTimeResult $creationDateTime
 */
class BotVersionSummary extends Shape
{
    /**
     * @param array{
     *     botName?: string,
     *     botVersion?: string,
     *     description?: string,
     *     botStatus?: 'Creating'|'Available'|'Inactive'|'Deleting'|'Failed'|'Versioning'|'Importing'|'Updating',
     *     creationDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $botName
 * @property string|null $botVersion
 * @property string|null $description
 * @property 'Creating'|'Available'|'Inactive'|'Deleting'|'Failed'|'Versioning'|'Importing'|'Updating'|null $botStatus
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 */
class BotVersionSummary extends Shape
{
    /**
     * @param array{
     *     botName?: string|null,
     *     botVersion?: string|null,
     *     description?: string|null,
     *     botStatus?: 'Creating'|'Available'|'Inactive'|'Deleting'|'Failed'|'Versioning'|'Importing'|'Updating'|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

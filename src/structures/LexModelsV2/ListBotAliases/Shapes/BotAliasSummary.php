<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $botAliasId
 * @property string|null $botAliasName
 * @property string|null $description
 * @property string|null $botVersion
 * @property 'Creating'|'Available'|'Deleting'|'Failed'|null $botAliasStatus
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 */
class BotAliasSummary extends Shape
{
    /**
     * @param array{
     *     botAliasId?: string|null,
     *     botAliasName?: string|null,
     *     description?: string|null,
     *     botVersion?: string|null,
     *     botAliasStatus?: 'Creating'|'Available'|'Deleting'|'Failed'|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

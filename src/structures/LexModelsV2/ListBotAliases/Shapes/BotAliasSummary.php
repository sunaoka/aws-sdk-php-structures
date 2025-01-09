<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $botAliasId
 * @property string $botAliasName
 * @property string $description
 * @property string $botVersion
 * @property 'Creating'|'Available'|'Deleting'|'Failed' $botAliasStatus
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 */
class BotAliasSummary extends Shape
{
    /**
     * @param array{
     *     botAliasId?: string,
     *     botAliasName?: string,
     *     description?: string,
     *     botVersion?: string,
     *     botAliasStatus?: 'Creating'|'Available'|'Deleting'|'Failed',
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

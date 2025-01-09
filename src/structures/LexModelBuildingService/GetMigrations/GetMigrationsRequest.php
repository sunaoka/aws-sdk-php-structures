<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetMigrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'V1_BOT_NAME'|'MIGRATION_DATE_TIME' $sortByAttribute
 * @property 'ASCENDING'|'DESCENDING' $sortByOrder
 * @property string $v1BotNameContains
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED' $migrationStatusEquals
 * @property int<1, 50> $maxResults
 * @property string $nextToken
 */
class GetMigrationsRequest extends Request
{
    /**
     * @param array{
     *     sortByAttribute?: 'V1_BOT_NAME'|'MIGRATION_DATE_TIME',
     *     sortByOrder?: 'ASCENDING'|'DESCENDING',
     *     v1BotNameContains?: string,
     *     migrationStatusEquals?: 'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     maxResults?: int<1, 50>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

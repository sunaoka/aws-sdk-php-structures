<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetMigrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'V1_BOT_NAME'|'MIGRATION_DATE_TIME'|null $sortByAttribute
 * @property 'ASCENDING'|'DESCENDING'|null $sortByOrder
 * @property string|null $v1BotNameContains
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|null $migrationStatusEquals
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class GetMigrationsRequest extends Request
{
    /**
     * @param array{
     *     sortByAttribute?: 'V1_BOT_NAME'|'MIGRATION_DATE_TIME'|null,
     *     sortByOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     v1BotNameContains?: string|null,
     *     migrationStatusEquals?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

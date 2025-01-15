<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetMigrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $migrationId
 * @property string|null $v1BotName
 * @property string|null $v1BotVersion
 * @property 'de-DE'|'en-AU'|'en-GB'|'en-IN'|'en-US'|'es-419'|'es-ES'|'es-US'|'fr-FR'|'fr-CA'|'it-IT'|'ja-JP'|'ko-KR'|null $v1BotLocale
 * @property string|null $v2BotId
 * @property string|null $v2BotRole
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|null $migrationStatus
 * @property 'CREATE_NEW'|'UPDATE_EXISTING'|null $migrationStrategy
 * @property \Aws\Api\DateTimeResult|null $migrationTimestamp
 */
class MigrationSummary extends Shape
{
    /**
     * @param array{
     *     migrationId?: string|null,
     *     v1BotName?: string|null,
     *     v1BotVersion?: string|null,
     *     v1BotLocale?: 'de-DE'|'en-AU'|'en-GB'|'en-IN'|'en-US'|'es-419'|'es-ES'|'es-US'|'fr-FR'|'fr-CA'|'it-IT'|'ja-JP'|'ko-KR'|null,
     *     v2BotId?: string|null,
     *     v2BotRole?: string|null,
     *     migrationStatus?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|null,
     *     migrationStrategy?: 'CREATE_NEW'|'UPDATE_EXISTING'|null,
     *     migrationTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

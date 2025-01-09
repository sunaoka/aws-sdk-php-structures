<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetMigrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $migrationId
 * @property string $v1BotName
 * @property string $v1BotVersion
 * @property 'de-DE'|'en-AU'|'en-GB'|'en-IN'|'en-US'|'es-419'|'es-ES'|'es-US'|'fr-FR'|'fr-CA'|'it-IT'|'ja-JP'|'ko-KR' $v1BotLocale
 * @property string $v2BotId
 * @property string $v2BotRole
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED' $migrationStatus
 * @property 'CREATE_NEW'|'UPDATE_EXISTING' $migrationStrategy
 * @property \Aws\Api\DateTimeResult $migrationTimestamp
 */
class MigrationSummary extends Shape
{
    /**
     * @param array{
     *     migrationId?: string,
     *     v1BotName?: string,
     *     v1BotVersion?: string,
     *     v1BotLocale?: 'de-DE'|'en-AU'|'en-GB'|'en-IN'|'en-US'|'es-419'|'es-ES'|'es-US'|'fr-FR'|'fr-CA'|'it-IT'|'ja-JP'|'ko-KR',
     *     v2BotId?: string,
     *     v2BotRole?: string,
     *     migrationStatus?: 'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     migrationStrategy?: 'CREATE_NEW'|'UPDATE_EXISTING',
     *     migrationTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

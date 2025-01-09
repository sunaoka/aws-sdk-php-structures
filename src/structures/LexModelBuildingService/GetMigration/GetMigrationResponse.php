<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetMigration;

use Sunaoka\Aws\Structures\Response;

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
 * @property list<Shapes\MigrationAlert> $alerts
 */
class GetMigrationResponse extends Response
{
}

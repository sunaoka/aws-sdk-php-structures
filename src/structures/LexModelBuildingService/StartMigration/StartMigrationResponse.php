<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\StartMigration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $v1BotName
 * @property string $v1BotVersion
 * @property 'de-DE'|'en-AU'|'en-GB'|'en-IN'|'en-US'|'es-419'|'es-ES'|'es-US'|'fr-FR'|'fr-CA'|'it-IT'|'ja-JP'|'ko-KR' $v1BotLocale
 * @property string $v2BotId
 * @property string $v2BotRole
 * @property string $migrationId
 * @property 'CREATE_NEW'|'UPDATE_EXISTING' $migrationStrategy
 * @property \Aws\Api\DateTimeResult $migrationTimestamp
 */
class StartMigrationResponse extends Response
{
}

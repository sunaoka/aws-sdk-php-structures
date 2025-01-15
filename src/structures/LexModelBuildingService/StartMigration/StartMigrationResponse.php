<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\StartMigration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $v1BotName
 * @property string|null $v1BotVersion
 * @property 'de-DE'|'en-AU'|'en-GB'|'en-IN'|'en-US'|'es-419'|'es-ES'|'es-US'|'fr-FR'|'fr-CA'|'it-IT'|'ja-JP'|'ko-KR'|null $v1BotLocale
 * @property string|null $v2BotId
 * @property string|null $v2BotRole
 * @property string|null $migrationId
 * @property 'CREATE_NEW'|'UPDATE_EXISTING'|null $migrationStrategy
 * @property \Aws\Api\DateTimeResult|null $migrationTimestamp
 */
class StartMigrationResponse extends Response
{
}

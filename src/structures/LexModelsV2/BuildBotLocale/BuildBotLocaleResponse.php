<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\BuildBotLocale;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $botVersion
 * @property string|null $localeId
 * @property 'Creating'|'Building'|'Built'|'ReadyExpressTesting'|'Failed'|'Deleting'|'NotBuilt'|'Importing'|'Processing'|null $botLocaleStatus
 * @property \Aws\Api\DateTimeResult|null $lastBuildSubmittedDateTime
 */
class BuildBotLocaleResponse extends Response
{
}

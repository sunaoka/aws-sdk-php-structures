<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\BuildBotLocale;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property 'Creating'|'Building'|'Built'|'ReadyExpressTesting'|'Failed'|'Deleting'|'NotBuilt'|'Importing'|'Processing' $botLocaleStatus
 * @property \Aws\Api\DateTimeResult $lastBuildSubmittedDateTime
 */
class BuildBotLocaleResponse extends Response
{
}

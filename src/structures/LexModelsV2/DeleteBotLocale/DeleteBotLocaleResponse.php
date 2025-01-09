<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteBotLocale;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property 'Creating'|'Building'|'Built'|'ReadyExpressTesting'|'Failed'|'Deleting'|'NotBuilt'|'Importing'|'Processing' $botLocaleStatus
 */
class DeleteBotLocaleResponse extends Response
{
}

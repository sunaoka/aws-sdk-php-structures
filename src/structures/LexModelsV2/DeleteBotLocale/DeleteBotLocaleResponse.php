<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteBotLocale;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $botVersion
 * @property string|null $localeId
 * @property 'Creating'|'Building'|'Built'|'ReadyExpressTesting'|'Failed'|'Deleting'|'NotBuilt'|'Importing'|'Processing'|null $botLocaleStatus
 */
class DeleteBotLocaleResponse extends Response
{
}

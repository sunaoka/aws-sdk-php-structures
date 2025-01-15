<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteBot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property 'Creating'|'Available'|'Inactive'|'Deleting'|'Failed'|'Versioning'|'Importing'|'Updating'|null $botStatus
 */
class DeleteBotResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteBot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property 'Creating'|'Available'|'Inactive'|'Deleting'|'Failed'|'Versioning'|'Importing'|'Updating' $botStatus
 */
class DeleteBotResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteBotVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $botVersion
 * @property 'Creating'|'Available'|'Inactive'|'Deleting'|'Failed'|'Versioning'|'Importing'|'Updating' $botStatus
 */
class DeleteBotVersionResponse extends Response
{
}

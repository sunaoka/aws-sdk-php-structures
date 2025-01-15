<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteBotVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $botVersion
 * @property 'Creating'|'Available'|'Inactive'|'Deleting'|'Failed'|'Versioning'|'Importing'|'Updating'|null $botStatus
 */
class DeleteBotVersionResponse extends Response
{
}

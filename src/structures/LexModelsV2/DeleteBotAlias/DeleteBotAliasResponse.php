<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteBotAlias;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botAliasId
 * @property string|null $botId
 * @property 'Creating'|'Available'|'Deleting'|'Failed'|null $botAliasStatus
 */
class DeleteBotAliasResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteBotAlias;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botAliasId
 * @property string $botId
 * @property 'Creating'|'Available'|'Deleting'|'Failed' $botAliasStatus
 */
class DeleteBotAliasResponse extends Response
{
}

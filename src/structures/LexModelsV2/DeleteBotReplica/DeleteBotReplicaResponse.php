<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteBotReplica;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $replicaRegion
 * @property 'Enabling'|'Enabled'|'Deleting'|'Failed'|null $botReplicaStatus
 */
class DeleteBotReplicaResponse extends Response
{
}

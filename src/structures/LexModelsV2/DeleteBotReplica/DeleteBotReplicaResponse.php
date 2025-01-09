<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteBotReplica;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $replicaRegion
 * @property 'Enabling'|'Enabled'|'Deleting'|'Failed' $botReplicaStatus
 */
class DeleteBotReplicaResponse extends Response
{
}

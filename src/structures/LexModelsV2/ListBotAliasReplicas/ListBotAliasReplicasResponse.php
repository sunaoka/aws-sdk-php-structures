<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotAliasReplicas;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $sourceRegion
 * @property string $replicaRegion
 * @property list<Shapes\BotAliasReplicaSummary> $botAliasReplicaSummaries
 * @property string $nextToken
 */
class ListBotAliasReplicasResponse extends Response
{
}

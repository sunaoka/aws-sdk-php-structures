<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotAliasReplicas;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $sourceRegion
 * @property string|null $replicaRegion
 * @property list<Shapes\BotAliasReplicaSummary>|null $botAliasReplicaSummaries
 * @property string|null $nextToken
 */
class ListBotAliasReplicasResponse extends Response
{
}

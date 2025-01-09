<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotVersionReplicas;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $sourceRegion
 * @property string $replicaRegion
 * @property list<Shapes\BotVersionReplicaSummary> $botVersionReplicaSummaries
 * @property string $nextToken
 */
class ListBotVersionReplicasResponse extends Response
{
}

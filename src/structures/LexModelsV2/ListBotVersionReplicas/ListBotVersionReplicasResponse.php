<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotVersionReplicas;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $sourceRegion
 * @property string|null $replicaRegion
 * @property list<Shapes\BotVersionReplicaSummary>|null $botVersionReplicaSummaries
 * @property string|null $nextToken
 */
class ListBotVersionReplicasResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotReplica;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $replicaRegion
 * @property string|null $sourceRegion
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property 'Enabling'|'Enabled'|'Deleting'|'Failed'|null $botReplicaStatus
 * @property list<string>|null $failureReasons
 */
class DescribeBotReplicaResponse extends Response
{
}

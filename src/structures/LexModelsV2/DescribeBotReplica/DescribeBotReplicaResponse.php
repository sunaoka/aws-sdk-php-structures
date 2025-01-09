<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotReplica;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $replicaRegion
 * @property string $sourceRegion
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property 'Enabling'|'Enabled'|'Deleting'|'Failed' $botReplicaStatus
 * @property list<string> $failureReasons
 */
class DescribeBotReplicaResponse extends Response
{
}

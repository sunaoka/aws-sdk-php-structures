<?php

namespace Sunaoka\Aws\Structures\KeyspacesStreams\GetStream;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $streamArn
 * @property string $streamLabel
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED' $streamStatus
 * @property 'NEW_IMAGE'|'OLD_IMAGE'|'NEW_AND_OLD_IMAGES'|'KEYS_ONLY' $streamViewType
 * @property \Aws\Api\DateTimeResult $creationRequestDateTime
 * @property string $keyspaceName
 * @property string $tableName
 * @property list<Shapes\Shard>|null $shards
 * @property string|null $nextToken
 */
class GetStreamResponse extends Response
{
}

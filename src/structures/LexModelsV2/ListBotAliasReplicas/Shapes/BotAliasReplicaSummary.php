<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotAliasReplicas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $botAliasId
 * @property 'Creating'|'Updating'|'Available'|'Deleting'|'Failed'|null $botAliasReplicationStatus
 * @property string|null $botVersion
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property list<string>|null $failureReasons
 */
class BotAliasReplicaSummary extends Shape
{
    /**
     * @param array{
     *     botAliasId?: string|null,
     *     botAliasReplicationStatus?: 'Creating'|'Updating'|'Available'|'Deleting'|'Failed'|null,
     *     botVersion?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     failureReasons?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotAliasReplicas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $botAliasId
 * @property 'Creating'|'Updating'|'Available'|'Deleting'|'Failed' $botAliasReplicationStatus
 * @property string $botVersion
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property list<string> $failureReasons
 */
class BotAliasReplicaSummary extends Shape
{
    /**
     * @param array{
     *     botAliasId?: string,
     *     botAliasReplicationStatus?: 'Creating'|'Updating'|'Available'|'Deleting'|'Failed',
     *     botVersion?: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     failureReasons?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

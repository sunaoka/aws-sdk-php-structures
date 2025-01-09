<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotVersionReplicas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $botVersion
 * @property 'Creating'|'Available'|'Deleting'|'Failed' $botVersionReplicationStatus
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property list<string> $failureReasons
 */
class BotVersionReplicaSummary extends Shape
{
    /**
     * @param array{
     *     botVersion?: string,
     *     botVersionReplicationStatus?: 'Creating'|'Available'|'Deleting'|'Failed',
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     failureReasons?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

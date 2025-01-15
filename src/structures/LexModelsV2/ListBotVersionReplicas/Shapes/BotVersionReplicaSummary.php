<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotVersionReplicas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $botVersion
 * @property 'Creating'|'Available'|'Deleting'|'Failed'|null $botVersionReplicationStatus
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property list<string>|null $failureReasons
 */
class BotVersionReplicaSummary extends Shape
{
    /**
     * @param array{
     *     botVersion?: string|null,
     *     botVersionReplicationStatus?: 'Creating'|'Available'|'Deleting'|'Failed'|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     failureReasons?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotReplicas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $replicaRegion
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property 'Enabling'|'Enabled'|'Deleting'|'Failed'|null $botReplicaStatus
 * @property list<string>|null $failureReasons
 */
class BotReplicaSummary extends Shape
{
    /**
     * @param array{
     *     replicaRegion?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     botReplicaStatus?: 'Enabling'|'Enabled'|'Deleting'|'Failed'|null,
     *     failureReasons?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotReplicas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $replicaRegion
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property 'Enabling'|'Enabled'|'Deleting'|'Failed' $botReplicaStatus
 * @property list<string> $failureReasons
 */
class BotReplicaSummary extends Shape
{
    /**
     * @param array{
     *     replicaRegion?: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     botReplicaStatus?: 'Enabling'|'Enabled'|'Deleting'|'Failed',
     *     failureReasons?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

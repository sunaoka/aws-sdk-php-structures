<?php

namespace Sunaoka\Aws\Structures\Proton\GetServiceInstanceSyncStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ResourceSyncEvent> $events
 * @property Revision $initialRevision
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property 'INITIATED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $status
 * @property string $target
 * @property Revision $targetRevision
 */
class ResourceSyncAttempt extends Shape
{
    /**
     * @param array{
     *     events: list<ResourceSyncEvent>,
     *     initialRevision: Revision,
     *     startedAt: \Aws\Api\DateTimeResult,
     *     status: 'INITIATED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED',
     *     target: string,
     *     targetRevision: Revision
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

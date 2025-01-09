<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\GetResourceSyncStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ResourceSyncEvent> $Events
 * @property Revision $InitialRevision
 * @property \Aws\Api\DateTimeResult $StartedAt
 * @property 'FAILED'|'INITIATED'|'IN_PROGRESS'|'SUCCEEDED' $Status
 * @property Revision $TargetRevision
 * @property string $Target
 */
class ResourceSyncAttempt extends Shape
{
    /**
     * @param array{
     *     Events: list<ResourceSyncEvent>,
     *     InitialRevision: Revision,
     *     StartedAt: \Aws\Api\DateTimeResult,
     *     Status: 'FAILED'|'INITIATED'|'IN_PROGRESS'|'SUCCEEDED',
     *     TargetRevision: Revision,
     *     Target: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

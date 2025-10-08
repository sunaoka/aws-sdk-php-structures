<?php

namespace Sunaoka\Aws\Structures\Odb\ListDbServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $estimatedPatchDuration
 * @property 'COMPLETE'|'FAILED'|'MAINTENANCE_IN_PROGRESS'|'SCHEDULED'|null $patchingStatus
 * @property string|null $timePatchingEnded
 * @property string|null $timePatchingStarted
 */
class DbServerPatchingDetails extends Shape
{
    /**
     * @param array{
     *     estimatedPatchDuration?: int|null,
     *     patchingStatus?: 'COMPLETE'|'FAILED'|'MAINTENANCE_IN_PROGRESS'|'SCHEDULED'|null,
     *     timePatchingEnded?: string|null,
     *     timePatchingStarted?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

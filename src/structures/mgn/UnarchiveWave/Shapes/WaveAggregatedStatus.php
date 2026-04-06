<?php

namespace Sunaoka\Aws\Structures\mgn\UnarchiveWave\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HEALTHY'|'LAGGING'|'ERROR'|null $healthStatus
 * @property string|null $lastUpdateDateTime
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED'|null $progressStatus
 * @property string|null $replicationStartedDateTime
 * @property int<0, max>|null $totalApplications
 */
class WaveAggregatedStatus extends Shape
{
    /**
     * @param array{
     *     healthStatus?: 'HEALTHY'|'LAGGING'|'ERROR'|null,
     *     lastUpdateDateTime?: string|null,
     *     progressStatus?: 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED'|null,
     *     replicationStartedDateTime?: string|null,
     *     totalApplications?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

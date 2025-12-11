<?php

namespace Sunaoka\Aws\Structures\mgn\ArchiveWave\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $lastUpdateDateTime
 * @property string|null $replicationStartedDateTime
 * @property 'HEALTHY'|'LAGGING'|'ERROR'|null $healthStatus
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED'|null $progressStatus
 * @property int<0, max>|null $totalApplications
 */
class WaveAggregatedStatus extends Shape
{
    /**
     * @param array{
     *     lastUpdateDateTime?: string|null,
     *     replicationStartedDateTime?: string|null,
     *     healthStatus?: 'HEALTHY'|'LAGGING'|'ERROR'|null,
     *     progressStatus?: 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED'|null,
     *     totalApplications?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

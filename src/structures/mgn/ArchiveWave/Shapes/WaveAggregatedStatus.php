<?php

namespace Sunaoka\Aws\Structures\mgn\ArchiveWave\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HEALTHY'|'LAGGING'|'ERROR' $healthStatus
 * @property string $lastUpdateDateTime
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED' $progressStatus
 * @property string $replicationStartedDateTime
 * @property int<0, max> $totalApplications
 */
class WaveAggregatedStatus extends Shape
{
    /**
     * @param array{
     *     healthStatus?: 'HEALTHY'|'LAGGING'|'ERROR',
     *     lastUpdateDateTime?: string,
     *     progressStatus?: 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED',
     *     replicationStartedDateTime?: string,
     *     totalApplications?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

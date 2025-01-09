<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HEALTHY'|'LAGGING'|'ERROR' $healthStatus
 * @property string $lastUpdateDateTime
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED' $progressStatus
 * @property int $totalSourceServers
 */
class ApplicationAggregatedStatus extends Shape
{
    /**
     * @param array{
     *     healthStatus?: 'HEALTHY'|'LAGGING'|'ERROR',
     *     lastUpdateDateTime?: string,
     *     progressStatus?: 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED',
     *     totalSourceServers?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

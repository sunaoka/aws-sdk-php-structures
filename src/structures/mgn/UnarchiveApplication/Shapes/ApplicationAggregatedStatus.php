<?php

namespace Sunaoka\Aws\Structures\mgn\UnarchiveApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HEALTHY'|'LAGGING'|'ERROR'|null $healthStatus
 * @property string|null $lastUpdateDateTime
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED'|null $progressStatus
 * @property int<0, max>|null $totalSourceServers
 */
class ApplicationAggregatedStatus extends Shape
{
    /**
     * @param array{
     *     healthStatus?: 'HEALTHY'|'LAGGING'|'ERROR'|null,
     *     lastUpdateDateTime?: string|null,
     *     progressStatus?: 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED'|null,
     *     totalSourceServers?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

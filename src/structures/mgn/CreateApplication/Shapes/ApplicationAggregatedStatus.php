<?php

namespace Sunaoka\Aws\Structures\mgn\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $lastUpdateDateTime
 * @property 'HEALTHY'|'LAGGING'|'ERROR'|null $healthStatus
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED'|null $progressStatus
 * @property int<0, max>|null $totalSourceServers
 */
class ApplicationAggregatedStatus extends Shape
{
    /**
     * @param array{
     *     lastUpdateDateTime?: string|null,
     *     healthStatus?: 'HEALTHY'|'LAGGING'|'ERROR'|null,
     *     progressStatus?: 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED'|null,
     *     totalSourceServers?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListSourcesForS3TableIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $identifier
 * @property DataSource|null $dataSource
 * @property 'ACTIVE'|'UNHEALTHY'|'FAILED'|'DATA_SOURCE_DELETE_IN_PROGRESS'|null $status
 * @property string|null $statusReason
 * @property int<0, max>|null $createdTimeStamp
 */
class S3TableIntegrationSource extends Shape
{
    /**
     * @param array{
     *     identifier?: string|null,
     *     dataSource?: DataSource|null,
     *     status?: 'ACTIVE'|'UNHEALTHY'|'FAILED'|'DATA_SOURCE_DELETE_IN_PROGRESS'|null,
     *     statusReason?: string|null,
     *     createdTimeStamp?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

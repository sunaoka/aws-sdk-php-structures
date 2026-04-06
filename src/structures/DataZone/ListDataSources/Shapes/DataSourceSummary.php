<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $connectionId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string $dataSourceId
 * @property string|null $description
 * @property string $domainId
 * @property 'ENABLED'|'DISABLED'|null $enableSetting
 * @property string|null $environmentId
 * @property int|null $lastRunAssetCount
 * @property \Aws\Api\DateTimeResult|null $lastRunAt
 * @property DataSourceErrorMessage|null $lastRunErrorMessage
 * @property 'REQUESTED'|'RUNNING'|'FAILED'|'PARTIALLY_SUCCEEDED'|'SUCCESS'|null $lastRunStatus
 * @property string $name
 * @property ScheduleConfiguration|null $schedule
 * @property 'CREATING'|'FAILED_CREATION'|'READY'|'UPDATING'|'FAILED_UPDATE'|'RUNNING'|'DELETING'|'FAILED_DELETION' $status
 * @property string $type
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class DataSourceSummary extends Shape
{
    /**
     * @param array{
     *     connectionId?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     dataSourceId: string,
     *     description?: string|null,
     *     domainId: string,
     *     enableSetting?: 'ENABLED'|'DISABLED'|null,
     *     environmentId?: string|null,
     *     lastRunAssetCount?: int|null,
     *     lastRunAt?: \Aws\Api\DateTimeResult|null,
     *     lastRunErrorMessage?: DataSourceErrorMessage|null,
     *     lastRunStatus?: 'REQUESTED'|'RUNNING'|'FAILED'|'PARTIALLY_SUCCEEDED'|'SUCCESS'|null,
     *     name: string,
     *     schedule?: ScheduleConfiguration|null,
     *     status: 'CREATING'|'FAILED_CREATION'|'READY'|'UPDATING'|'FAILED_UPDATE'|'RUNNING'|'DELETING'|'FAILED_DELETION',
     *     type: string,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

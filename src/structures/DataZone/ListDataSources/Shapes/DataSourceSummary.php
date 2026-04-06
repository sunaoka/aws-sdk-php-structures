<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainId
 * @property string|null $environmentId
 * @property string|null $connectionId
 * @property string $dataSourceId
 * @property string $name
 * @property string $type
 * @property 'CREATING'|'FAILED_CREATION'|'READY'|'UPDATING'|'FAILED_UPDATE'|'RUNNING'|'DELETING'|'FAILED_DELETION' $status
 * @property 'ENABLED'|'DISABLED'|null $enableSetting
 * @property ScheduleConfiguration|null $schedule
 * @property 'REQUESTED'|'RUNNING'|'FAILED'|'PARTIALLY_SUCCEEDED'|'SUCCESS'|null $lastRunStatus
 * @property \Aws\Api\DateTimeResult|null $lastRunAt
 * @property DataSourceErrorMessage|null $lastRunErrorMessage
 * @property int|null $lastRunAssetCount
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $description
 */
class DataSourceSummary extends Shape
{
    /**
     * @param array{
     *     domainId: string,
     *     environmentId?: string|null,
     *     connectionId?: string|null,
     *     dataSourceId: string,
     *     name: string,
     *     type: string,
     *     status: 'CREATING'|'FAILED_CREATION'|'READY'|'UPDATING'|'FAILED_UPDATE'|'RUNNING'|'DELETING'|'FAILED_DELETION',
     *     enableSetting?: 'ENABLED'|'DISABLED'|null,
     *     schedule?: ScheduleConfiguration|null,
     *     lastRunStatus?: 'REQUESTED'|'RUNNING'|'FAILED'|'PARTIALLY_SUCCEEDED'|'SUCCESS'|null,
     *     lastRunAt?: \Aws\Api\DateTimeResult|null,
     *     lastRunErrorMessage?: DataSourceErrorMessage|null,
     *     lastRunAssetCount?: int|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

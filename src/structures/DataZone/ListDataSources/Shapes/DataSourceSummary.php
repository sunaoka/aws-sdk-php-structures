<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectionId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $dataSourceId
 * @property string $description
 * @property string $domainId
 * @property 'ENABLED'|'DISABLED' $enableSetting
 * @property string $environmentId
 * @property int $lastRunAssetCount
 * @property \Aws\Api\DateTimeResult $lastRunAt
 * @property DataSourceErrorMessage $lastRunErrorMessage
 * @property 'REQUESTED'|'RUNNING'|'FAILED'|'PARTIALLY_SUCCEEDED'|'SUCCESS' $lastRunStatus
 * @property string $name
 * @property ScheduleConfiguration $schedule
 * @property 'CREATING'|'FAILED_CREATION'|'READY'|'UPDATING'|'FAILED_UPDATE'|'RUNNING'|'DELETING'|'FAILED_DELETION' $status
 * @property string $type
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class DataSourceSummary extends Shape
{
    /**
     * @param array{
     *     connectionId?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     dataSourceId: string,
     *     description?: string,
     *     domainId: string,
     *     enableSetting?: 'ENABLED'|'DISABLED',
     *     environmentId?: string,
     *     lastRunAssetCount?: int,
     *     lastRunAt?: \Aws\Api\DateTimeResult,
     *     lastRunErrorMessage?: DataSourceErrorMessage,
     *     lastRunStatus?: 'REQUESTED'|'RUNNING'|'FAILED'|'PARTIALLY_SUCCEEDED'|'SUCCESS',
     *     name: string,
     *     schedule?: ScheduleConfiguration,
     *     status: 'CREATING'|'FAILED_CREATION'|'READY'|'UPDATING'|'FAILED_UPDATE'|'RUNNING'|'DELETING'|'FAILED_DELETION',
     *     type: string,
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

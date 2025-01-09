<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataSourceRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $dataSourceId
 * @property DataSourceErrorMessage $errorMessage
 * @property string $id
 * @property DataSourceRunLineageSummary $lineageSummary
 * @property string $projectId
 * @property RunStatisticsForAssets $runStatisticsForAssets
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property 'REQUESTED'|'RUNNING'|'FAILED'|'PARTIALLY_SUCCEEDED'|'SUCCESS' $status
 * @property \Aws\Api\DateTimeResult $stoppedAt
 * @property 'PRIORITIZED'|'SCHEDULED' $type
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class DataSourceRunSummary extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     dataSourceId: string,
     *     errorMessage?: DataSourceErrorMessage,
     *     id: string,
     *     lineageSummary?: DataSourceRunLineageSummary,
     *     projectId: string,
     *     runStatisticsForAssets?: RunStatisticsForAssets,
     *     startedAt?: \Aws\Api\DateTimeResult,
     *     status: 'REQUESTED'|'RUNNING'|'FAILED'|'PARTIALLY_SUCCEEDED'|'SUCCESS',
     *     stoppedAt?: \Aws\Api\DateTimeResult,
     *     type: 'PRIORITIZED'|'SCHEDULED',
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataSourceRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $dataSourceId
 * @property DataSourceErrorMessage|null $errorMessage
 * @property string $id
 * @property DataSourceRunLineageSummary|null $lineageSummary
 * @property string $projectId
 * @property RunStatisticsForAssets|null $runStatisticsForAssets
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property 'REQUESTED'|'RUNNING'|'FAILED'|'PARTIALLY_SUCCEEDED'|'SUCCESS' $status
 * @property \Aws\Api\DateTimeResult|null $stoppedAt
 * @property 'PRIORITIZED'|'SCHEDULED' $type
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class DataSourceRunSummary extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     dataSourceId: string,
     *     errorMessage?: DataSourceErrorMessage|null,
     *     id: string,
     *     lineageSummary?: DataSourceRunLineageSummary|null,
     *     projectId: string,
     *     runStatisticsForAssets?: RunStatisticsForAssets|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     status: 'REQUESTED'|'RUNNING'|'FAILED'|'PARTIALLY_SUCCEEDED'|'SUCCESS',
     *     stoppedAt?: \Aws\Api\DateTimeResult|null,
     *     type: 'PRIORITIZED'|'SCHEDULED',
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

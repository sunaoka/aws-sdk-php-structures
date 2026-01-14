<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataSourceRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $dataSourceId
 * @property 'PRIORITIZED'|'SCHEDULED' $type
 * @property 'REQUESTED'|'RUNNING'|'FAILED'|'PARTIALLY_SUCCEEDED'|'SUCCESS' $status
 * @property string $projectId
 * @property RunStatisticsForAssets|null $runStatisticsForAssets
 * @property DataSourceErrorMessage|null $errorMessage
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $stoppedAt
 * @property DataSourceRunLineageSummary|null $lineageSummary
 */
class DataSourceRunSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     dataSourceId: string,
     *     type: 'PRIORITIZED'|'SCHEDULED',
     *     status: 'REQUESTED'|'RUNNING'|'FAILED'|'PARTIALLY_SUCCEEDED'|'SUCCESS',
     *     projectId: string,
     *     runStatisticsForAssets?: RunStatisticsForAssets|null,
     *     errorMessage?: DataSourceErrorMessage|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     stoppedAt?: \Aws\Api\DateTimeResult|null,
     *     lineageSummary?: DataSourceRunLineageSummary|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

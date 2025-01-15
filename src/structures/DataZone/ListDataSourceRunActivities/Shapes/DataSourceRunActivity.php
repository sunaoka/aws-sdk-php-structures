<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataSourceRunActivities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $dataAssetId
 * @property 'FAILED'|'PUBLISHING_FAILED'|'SUCCEEDED_CREATED'|'SUCCEEDED_UPDATED'|'SKIPPED_ALREADY_IMPORTED'|'SKIPPED_ARCHIVED'|'SKIPPED_NO_ACCESS'|'UNCHANGED' $dataAssetStatus
 * @property string $dataSourceRunId
 * @property string $database
 * @property DataSourceErrorMessage|null $errorMessage
 * @property LineageInfo|null $lineageSummary
 * @property string $projectId
 * @property string|null $technicalDescription
 * @property string $technicalName
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class DataSourceRunActivity extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     dataAssetId?: string|null,
     *     dataAssetStatus: 'FAILED'|'PUBLISHING_FAILED'|'SUCCEEDED_CREATED'|'SUCCEEDED_UPDATED'|'SKIPPED_ALREADY_IMPORTED'|'SKIPPED_ARCHIVED'|'SKIPPED_NO_ACCESS'|'UNCHANGED',
     *     dataSourceRunId: string,
     *     database: string,
     *     errorMessage?: DataSourceErrorMessage|null,
     *     lineageSummary?: LineageInfo|null,
     *     projectId: string,
     *     technicalDescription?: string|null,
     *     technicalName: string,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

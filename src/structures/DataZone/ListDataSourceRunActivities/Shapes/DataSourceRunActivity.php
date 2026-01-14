<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataSourceRunActivities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $database
 * @property string $dataSourceRunId
 * @property string $technicalName
 * @property 'FAILED'|'PUBLISHING_FAILED'|'SUCCEEDED_CREATED'|'SUCCEEDED_UPDATED'|'SKIPPED_ALREADY_IMPORTED'|'SKIPPED_ARCHIVED'|'SKIPPED_NO_ACCESS'|'UNCHANGED' $dataAssetStatus
 * @property string $projectId
 * @property string|null $dataAssetId
 * @property string|null $technicalDescription
 * @property DataSourceErrorMessage|null $errorMessage
 * @property LineageInfo|null $lineageSummary
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class DataSourceRunActivity extends Shape
{
    /**
     * @param array{
     *     database: string,
     *     dataSourceRunId: string,
     *     technicalName: string,
     *     dataAssetStatus: 'FAILED'|'PUBLISHING_FAILED'|'SUCCEEDED_CREATED'|'SUCCEEDED_UPDATED'|'SKIPPED_ALREADY_IMPORTED'|'SKIPPED_ARCHIVED'|'SKIPPED_NO_ACCESS'|'UNCHANGED',
     *     projectId: string,
     *     dataAssetId?: string|null,
     *     technicalDescription?: string|null,
     *     errorMessage?: DataSourceErrorMessage|null,
     *     lineageSummary?: LineageInfo|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

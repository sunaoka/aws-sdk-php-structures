<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataSourceRunActivities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $dataAssetId
 * @property 'FAILED'|'PUBLISHING_FAILED'|'SUCCEEDED_CREATED'|'SUCCEEDED_UPDATED'|'SKIPPED_ALREADY_IMPORTED'|'SKIPPED_ARCHIVED'|'SKIPPED_NO_ACCESS'|'UNCHANGED' $dataAssetStatus
 * @property string $dataSourceRunId
 * @property string $database
 * @property DataSourceErrorMessage $errorMessage
 * @property LineageInfo $lineageSummary
 * @property string $projectId
 * @property string $technicalDescription
 * @property string $technicalName
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class DataSourceRunActivity extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     dataAssetId?: string,
     *     dataAssetStatus: 'FAILED'|'PUBLISHING_FAILED'|'SUCCEEDED_CREATED'|'SUCCEEDED_UPDATED'|'SKIPPED_ALREADY_IMPORTED'|'SKIPPED_ARCHIVED'|'SKIPPED_NO_ACCESS'|'UNCHANGED',
     *     dataSourceRunId: string,
     *     database: string,
     *     errorMessage?: DataSourceErrorMessage,
     *     lineageSummary?: LineageInfo,
     *     projectId: string,
     *     technicalDescription?: string,
     *     technicalName: string,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

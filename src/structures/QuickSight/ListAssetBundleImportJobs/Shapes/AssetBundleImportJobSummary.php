<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListAssetBundleImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUEUED_FOR_IMMEDIATE_EXECUTION'|'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'FAILED_ROLLBACK_IN_PROGRESS'|'FAILED_ROLLBACK_COMPLETED'|'FAILED_ROLLBACK_ERROR'|null $JobStatus
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $AssetBundleImportJobId
 * @property 'DO_NOTHING'|'ROLLBACK'|null $FailureAction
 */
class AssetBundleImportJobSummary extends Shape
{
    /**
     * @param array{
     *     JobStatus?: 'QUEUED_FOR_IMMEDIATE_EXECUTION'|'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'FAILED_ROLLBACK_IN_PROGRESS'|'FAILED_ROLLBACK_COMPLETED'|'FAILED_ROLLBACK_ERROR'|null,
     *     Arn?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     AssetBundleImportJobId?: string|null,
     *     FailureAction?: 'DO_NOTHING'|'ROLLBACK'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

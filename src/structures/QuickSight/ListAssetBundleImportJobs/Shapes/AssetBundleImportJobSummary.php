<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListAssetBundleImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUEUED_FOR_IMMEDIATE_EXECUTION'|'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'FAILED_ROLLBACK_IN_PROGRESS'|'FAILED_ROLLBACK_COMPLETED'|'FAILED_ROLLBACK_ERROR' $JobStatus
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $AssetBundleImportJobId
 * @property 'DO_NOTHING'|'ROLLBACK' $FailureAction
 */
class AssetBundleImportJobSummary extends Shape
{
    /**
     * @param array{
     *     JobStatus?: 'QUEUED_FOR_IMMEDIATE_EXECUTION'|'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'FAILED_ROLLBACK_IN_PROGRESS'|'FAILED_ROLLBACK_COMPLETED'|'FAILED_ROLLBACK_ERROR',
     *     Arn?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     AssetBundleImportJobId?: string,
     *     FailureAction?: 'DO_NOTHING'|'ROLLBACK'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

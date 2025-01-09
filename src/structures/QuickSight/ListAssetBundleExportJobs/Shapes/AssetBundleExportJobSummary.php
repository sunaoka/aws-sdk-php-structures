<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListAssetBundleExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUEUED_FOR_IMMEDIATE_EXECUTION'|'IN_PROGRESS'|'SUCCESSFUL'|'FAILED' $JobStatus
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $AssetBundleExportJobId
 * @property bool $IncludeAllDependencies
 * @property 'CLOUDFORMATION_JSON'|'QUICKSIGHT_JSON' $ExportFormat
 * @property bool $IncludePermissions
 * @property bool $IncludeTags
 */
class AssetBundleExportJobSummary extends Shape
{
    /**
     * @param array{
     *     JobStatus?: 'QUEUED_FOR_IMMEDIATE_EXECUTION'|'IN_PROGRESS'|'SUCCESSFUL'|'FAILED',
     *     Arn?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     AssetBundleExportJobId?: string,
     *     IncludeAllDependencies?: bool,
     *     ExportFormat?: 'CLOUDFORMATION_JSON'|'QUICKSIGHT_JSON',
     *     IncludePermissions?: bool,
     *     IncludeTags?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

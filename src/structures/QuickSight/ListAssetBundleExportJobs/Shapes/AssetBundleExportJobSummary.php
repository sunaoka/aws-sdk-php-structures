<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListAssetBundleExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUEUED_FOR_IMMEDIATE_EXECUTION'|'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|null $JobStatus
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $AssetBundleExportJobId
 * @property bool|null $IncludeAllDependencies
 * @property 'CLOUDFORMATION_JSON'|'QUICKSIGHT_JSON'|null $ExportFormat
 * @property bool|null $IncludePermissions
 * @property bool|null $IncludeTags
 */
class AssetBundleExportJobSummary extends Shape
{
    /**
     * @param array{
     *     JobStatus?: 'QUEUED_FOR_IMMEDIATE_EXECUTION'|'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|null,
     *     Arn?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     AssetBundleExportJobId?: string|null,
     *     IncludeAllDependencies?: bool|null,
     *     ExportFormat?: 'CLOUDFORMATION_JSON'|'QUICKSIGHT_JSON'|null,
     *     IncludePermissions?: bool|null,
     *     IncludeTags?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

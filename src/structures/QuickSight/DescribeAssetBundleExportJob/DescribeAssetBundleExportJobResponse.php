<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleExportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'QUEUED_FOR_IMMEDIATE_EXECUTION'|'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|null $JobStatus
 * @property string|null $DownloadUrl
 * @property list<Shapes\AssetBundleExportJobError>|null $Errors
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $AssetBundleExportJobId
 * @property string|null $AwsAccountId
 * @property list<string>|null $ResourceArns
 * @property bool|null $IncludeAllDependencies
 * @property 'CLOUDFORMATION_JSON'|'QUICKSIGHT_JSON'|null $ExportFormat
 * @property Shapes\AssetBundleCloudFormationOverridePropertyConfiguration|null $CloudFormationOverridePropertyConfiguration
 * @property string|null $RequestId
 * @property int|null $Status
 * @property bool|null $IncludePermissions
 * @property bool|null $IncludeTags
 * @property Shapes\AssetBundleExportJobValidationStrategy|null $ValidationStrategy
 * @property list<Shapes\AssetBundleExportJobWarning>|null $Warnings
 * @property bool|null $IncludeFolderMemberships
 * @property 'RECURSE'|'ONE_LEVEL'|'NONE'|null $IncludeFolderMembers
 */
class DescribeAssetBundleExportJobResponse extends Response
{
}

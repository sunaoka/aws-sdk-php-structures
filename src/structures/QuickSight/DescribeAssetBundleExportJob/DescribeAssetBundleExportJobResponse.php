<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleExportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'QUEUED_FOR_IMMEDIATE_EXECUTION'|'IN_PROGRESS'|'SUCCESSFUL'|'FAILED' $JobStatus
 * @property string $DownloadUrl
 * @property list<Shapes\AssetBundleExportJobError> $Errors
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $AssetBundleExportJobId
 * @property string $AwsAccountId
 * @property list<string> $ResourceArns
 * @property bool $IncludeAllDependencies
 * @property 'CLOUDFORMATION_JSON'|'QUICKSIGHT_JSON' $ExportFormat
 * @property Shapes\AssetBundleCloudFormationOverridePropertyConfiguration $CloudFormationOverridePropertyConfiguration
 * @property string $RequestId
 * @property int $Status
 * @property bool $IncludePermissions
 * @property bool $IncludeTags
 * @property Shapes\AssetBundleExportJobValidationStrategy $ValidationStrategy
 * @property list<Shapes\AssetBundleExportJobWarning> $Warnings
 * @property bool $IncludeFolderMemberships
 * @property 'RECURSE'|'ONE_LEVEL'|'NONE' $IncludeFolderMembers
 */
class DescribeAssetBundleExportJobResponse extends Response
{
}

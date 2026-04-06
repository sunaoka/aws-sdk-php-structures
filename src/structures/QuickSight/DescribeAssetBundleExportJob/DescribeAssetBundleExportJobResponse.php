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
 */
class DescribeAssetBundleExportJobResponse extends Response
{
}

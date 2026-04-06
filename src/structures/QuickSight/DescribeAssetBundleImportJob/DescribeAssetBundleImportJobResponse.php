<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'QUEUED_FOR_IMMEDIATE_EXECUTION'|'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'FAILED_ROLLBACK_IN_PROGRESS'|'FAILED_ROLLBACK_COMPLETED'|'FAILED_ROLLBACK_ERROR'|null $JobStatus
 * @property list<Shapes\AssetBundleImportJobError>|null $Errors
 * @property list<Shapes\AssetBundleImportJobError>|null $RollbackErrors
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $AssetBundleImportJobId
 * @property string|null $AwsAccountId
 * @property Shapes\AssetBundleImportSourceDescription|null $AssetBundleImportSource
 * @property Shapes\AssetBundleImportJobOverrideParameters|null $OverrideParameters
 * @property 'DO_NOTHING'|'ROLLBACK'|null $FailureAction
 * @property string|null $RequestId
 * @property int|null $Status
 * @property Shapes\AssetBundleImportJobOverridePermissions|null $OverridePermissions
 * @property Shapes\AssetBundleImportJobOverrideTags|null $OverrideTags
 * @property Shapes\AssetBundleImportJobOverrideValidationStrategy|null $OverrideValidationStrategy
 * @property list<Shapes\AssetBundleImportJobWarning>|null $Warnings
 */
class DescribeAssetBundleImportJobResponse extends Response
{
}

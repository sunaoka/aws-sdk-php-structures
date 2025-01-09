<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $AssetBundleExportJobId
 * @property list<string> $ResourceArns
 * @property bool $IncludeAllDependencies
 * @property 'CLOUDFORMATION_JSON'|'QUICKSIGHT_JSON' $ExportFormat
 * @property Shapes\AssetBundleCloudFormationOverridePropertyConfiguration $CloudFormationOverridePropertyConfiguration
 * @property bool $IncludePermissions
 * @property bool $IncludeTags
 * @property Shapes\AssetBundleExportJobValidationStrategy $ValidationStrategy
 * @property bool $IncludeFolderMemberships
 * @property 'RECURSE'|'ONE_LEVEL'|'NONE' $IncludeFolderMembers
 */
class StartAssetBundleExportJobRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AssetBundleExportJobId: string,
     *     ResourceArns: list<string>,
     *     IncludeAllDependencies?: bool,
     *     ExportFormat: 'CLOUDFORMATION_JSON'|'QUICKSIGHT_JSON',
     *     CloudFormationOverridePropertyConfiguration?: Shapes\AssetBundleCloudFormationOverridePropertyConfiguration,
     *     IncludePermissions?: bool,
     *     IncludeTags?: bool,
     *     ValidationStrategy?: Shapes\AssetBundleExportJobValidationStrategy,
     *     IncludeFolderMemberships?: bool,
     *     IncludeFolderMembers?: 'RECURSE'|'ONE_LEVEL'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

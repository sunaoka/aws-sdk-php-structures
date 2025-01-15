<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $AssetBundleExportJobId
 * @property list<string> $ResourceArns
 * @property bool|null $IncludeAllDependencies
 * @property 'CLOUDFORMATION_JSON'|'QUICKSIGHT_JSON' $ExportFormat
 * @property Shapes\AssetBundleCloudFormationOverridePropertyConfiguration|null $CloudFormationOverridePropertyConfiguration
 * @property bool|null $IncludePermissions
 * @property bool|null $IncludeTags
 * @property Shapes\AssetBundleExportJobValidationStrategy|null $ValidationStrategy
 * @property bool|null $IncludeFolderMemberships
 * @property 'RECURSE'|'ONE_LEVEL'|'NONE'|null $IncludeFolderMembers
 */
class StartAssetBundleExportJobRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AssetBundleExportJobId: string,
     *     ResourceArns: list<string>,
     *     IncludeAllDependencies?: bool|null,
     *     ExportFormat: 'CLOUDFORMATION_JSON'|'QUICKSIGHT_JSON',
     *     CloudFormationOverridePropertyConfiguration?: Shapes\AssetBundleCloudFormationOverridePropertyConfiguration|null,
     *     IncludePermissions?: bool|null,
     *     IncludeTags?: bool|null,
     *     ValidationStrategy?: Shapes\AssetBundleExportJobValidationStrategy|null,
     *     IncludeFolderMemberships?: bool|null,
     *     IncludeFolderMembers?: 'RECURSE'|'ONE_LEVEL'|'NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

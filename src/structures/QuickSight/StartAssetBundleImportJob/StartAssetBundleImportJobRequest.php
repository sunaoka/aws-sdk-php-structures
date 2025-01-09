<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $AssetBundleImportJobId
 * @property Shapes\AssetBundleImportSource $AssetBundleImportSource
 * @property Shapes\AssetBundleImportJobOverrideParameters $OverrideParameters
 * @property 'DO_NOTHING'|'ROLLBACK' $FailureAction
 * @property Shapes\AssetBundleImportJobOverridePermissions $OverridePermissions
 * @property Shapes\AssetBundleImportJobOverrideTags $OverrideTags
 * @property Shapes\AssetBundleImportJobOverrideValidationStrategy $OverrideValidationStrategy
 */
class StartAssetBundleImportJobRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AssetBundleImportJobId: string,
     *     AssetBundleImportSource: Shapes\AssetBundleImportSource,
     *     OverrideParameters?: Shapes\AssetBundleImportJobOverrideParameters,
     *     FailureAction?: 'DO_NOTHING'|'ROLLBACK',
     *     OverridePermissions?: Shapes\AssetBundleImportJobOverridePermissions,
     *     OverrideTags?: Shapes\AssetBundleImportJobOverrideTags,
     *     OverrideValidationStrategy?: Shapes\AssetBundleImportJobOverrideValidationStrategy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

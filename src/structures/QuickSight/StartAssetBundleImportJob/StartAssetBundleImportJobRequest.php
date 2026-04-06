<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $AssetBundleImportJobId
 * @property Shapes\AssetBundleImportSource $AssetBundleImportSource
 * @property Shapes\AssetBundleImportJobOverrideParameters|null $OverrideParameters
 * @property 'DO_NOTHING'|'ROLLBACK'|null $FailureAction
 * @property Shapes\AssetBundleImportJobOverridePermissions|null $OverridePermissions
 * @property Shapes\AssetBundleImportJobOverrideTags|null $OverrideTags
 * @property Shapes\AssetBundleImportJobOverrideValidationStrategy|null $OverrideValidationStrategy
 */
class StartAssetBundleImportJobRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AssetBundleImportJobId: string,
     *     AssetBundleImportSource: Shapes\AssetBundleImportSource,
     *     OverrideParameters?: Shapes\AssetBundleImportJobOverrideParameters|null,
     *     FailureAction?: 'DO_NOTHING'|'ROLLBACK'|null,
     *     OverridePermissions?: Shapes\AssetBundleImportJobOverridePermissions|null,
     *     OverrideTags?: Shapes\AssetBundleImportJobOverrideTags|null,
     *     OverrideValidationStrategy?: Shapes\AssetBundleImportJobOverrideValidationStrategy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

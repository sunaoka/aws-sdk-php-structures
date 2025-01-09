<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AnalysisIds
 * @property AssetBundleResourcePermissions $Permissions
 */
class AssetBundleImportJobAnalysisOverridePermissions extends Shape
{
    /**
     * @param array{
     *     AnalysisIds: list<string>,
     *     Permissions: AssetBundleResourcePermissions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

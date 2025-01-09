<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ThemeIds
 * @property AssetBundleResourcePermissions $Permissions
 */
class AssetBundleImportJobThemeOverridePermissions extends Shape
{
    /**
     * @param array{
     *     ThemeIds: list<string>,
     *     Permissions: AssetBundleResourcePermissions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

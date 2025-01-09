<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ThemeId
 * @property string $Name
 */
class AssetBundleImportJobThemeOverrideParameters extends Shape
{
    /**
     * @param array{
     *     ThemeId: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

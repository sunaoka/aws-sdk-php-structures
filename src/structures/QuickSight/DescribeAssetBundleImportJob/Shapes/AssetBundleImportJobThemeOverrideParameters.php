<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ThemeId
 * @property string|null $Name
 */
class AssetBundleImportJobThemeOverrideParameters extends Shape
{
    /**
     * @param array{
     *     ThemeId: string,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

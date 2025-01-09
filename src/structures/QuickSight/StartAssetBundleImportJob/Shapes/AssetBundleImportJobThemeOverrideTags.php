<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ThemeIds
 * @property list<Tag> $Tags
 */
class AssetBundleImportJobThemeOverrideTags extends Shape
{
    /**
     * @param array{
     *     ThemeIds: list<string>,
     *     Tags: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

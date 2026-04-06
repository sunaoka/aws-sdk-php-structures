<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Principals
 * @property list<string> $Actions
 */
class AssetBundleResourcePermissions extends Shape
{
    /**
     * @param array{
     *     Principals: list<string>,
     *     Actions: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

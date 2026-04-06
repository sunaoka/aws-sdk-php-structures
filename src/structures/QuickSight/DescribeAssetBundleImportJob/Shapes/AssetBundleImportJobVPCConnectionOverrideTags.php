<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $VPCConnectionIds
 * @property list<Tag> $Tags
 */
class AssetBundleImportJobVPCConnectionOverrideTags extends Shape
{
    /**
     * @param array{
     *     VPCConnectionIds: list<string>,
     *     Tags: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

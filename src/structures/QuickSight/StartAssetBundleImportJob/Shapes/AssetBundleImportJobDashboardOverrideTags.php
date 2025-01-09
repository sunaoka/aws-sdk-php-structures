<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $DashboardIds
 * @property list<Tag> $Tags
 */
class AssetBundleImportJobDashboardOverrideTags extends Shape
{
    /**
     * @param array{
     *     DashboardIds: list<string>,
     *     Tags: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

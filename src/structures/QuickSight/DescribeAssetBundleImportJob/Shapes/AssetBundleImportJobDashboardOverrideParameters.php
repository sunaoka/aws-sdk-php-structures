<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DashboardId
 * @property string $Name
 */
class AssetBundleImportJobDashboardOverrideParameters extends Shape
{
    /**
     * @param array{
     *     DashboardId: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

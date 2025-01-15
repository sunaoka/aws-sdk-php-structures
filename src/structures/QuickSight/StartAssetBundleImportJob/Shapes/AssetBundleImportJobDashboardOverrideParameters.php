<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DashboardId
 * @property string|null $Name
 */
class AssetBundleImportJobDashboardOverrideParameters extends Shape
{
    /**
     * @param array{
     *     DashboardId: string,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

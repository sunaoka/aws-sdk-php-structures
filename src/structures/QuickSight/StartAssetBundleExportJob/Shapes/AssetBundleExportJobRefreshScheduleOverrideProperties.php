<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property list<'StartAfterDateTime'> $Properties
 */
class AssetBundleExportJobRefreshScheduleOverrideProperties extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Properties: list<'StartAfterDateTime'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

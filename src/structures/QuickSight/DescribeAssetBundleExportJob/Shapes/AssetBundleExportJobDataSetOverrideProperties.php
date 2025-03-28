<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property list<'Name'|'RefreshFailureEmailAlertStatus'> $Properties
 */
class AssetBundleExportJobDataSetOverrideProperties extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Properties: list<'Name'|'RefreshFailureEmailAlertStatus'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

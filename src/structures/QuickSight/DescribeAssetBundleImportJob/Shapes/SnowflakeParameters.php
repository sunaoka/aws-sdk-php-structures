<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Host
 * @property string $Database
 * @property string $Warehouse
 */
class SnowflakeParameters extends Shape
{
    /**
     * @param array{
     *     Host: string,
     *     Database: string,
     *     Warehouse: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

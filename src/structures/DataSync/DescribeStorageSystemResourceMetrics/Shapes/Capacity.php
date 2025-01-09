<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResourceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $Used
 * @property int<0, max> $Provisioned
 * @property int<0, max> $LogicalUsed
 * @property int<0, max> $ClusterCloudStorageUsed
 */
class Capacity extends Shape
{
    /**
     * @param array{
     *     Used?: int<0, max>,
     *     Provisioned?: int<0, max>,
     *     LogicalUsed?: int<0, max>,
     *     ClusterCloudStorageUsed?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

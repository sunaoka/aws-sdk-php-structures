<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResourceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Used
 * @property int $Provisioned
 * @property int $LogicalUsed
 * @property int $ClusterCloudStorageUsed
 */
class Capacity extends Shape
{
    /**
     * @param array{
     *     Used?: int,
     *     Provisioned?: int,
     *     LogicalUsed?: int,
     *     ClusterCloudStorageUsed?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

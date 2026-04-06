<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResourceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $Used
 * @property int<0, max>|null $Provisioned
 * @property int<0, max>|null $LogicalUsed
 * @property int<0, max>|null $ClusterCloudStorageUsed
 */
class Capacity extends Shape
{
    /**
     * @param array{
     *     Used?: int<0, max>|null,
     *     Provisioned?: int<0, max>|null,
     *     LogicalUsed?: int<0, max>|null,
     *     ClusterCloudStorageUsed?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

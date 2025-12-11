<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeOrderableDBInstanceOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $SupportsStorageAutoscaling
 * @property bool|null $SupportsStorageThroughput
 * @property bool|null $SupportsIops
 * @property string|null $StorageType
 * @property int|null $MinStorageSize
 * @property int|null $MaxStorageSize
 * @property int|null $MinIops
 * @property int|null $MaxIops
 * @property double|null $MinIopsPerGib
 * @property double|null $MaxIopsPerGib
 * @property int|null $MinStorageThroughput
 * @property int|null $MaxStorageThroughput
 */
class AvailableAdditionalStorageVolumesOption extends Shape
{
    /**
     * @param array{
     *     SupportsStorageAutoscaling?: bool|null,
     *     SupportsStorageThroughput?: bool|null,
     *     SupportsIops?: bool|null,
     *     StorageType?: string|null,
     *     MinStorageSize?: int|null,
     *     MaxStorageSize?: int|null,
     *     MinIops?: int|null,
     *     MaxIops?: int|null,
     *     MinIopsPerGib?: double|null,
     *     MaxIopsPerGib?: double|null,
     *     MinStorageThroughput?: int|null,
     *     MaxStorageThroughput?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

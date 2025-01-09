<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeValidDBInstanceModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StorageType
 * @property list<Range> $StorageSize
 * @property list<Range> $ProvisionedIops
 * @property list<DoubleRange> $IopsToStorageRatio
 * @property bool $SupportsStorageAutoscaling
 * @property list<Range> $ProvisionedStorageThroughput
 * @property list<DoubleRange> $StorageThroughputToIopsRatio
 */
class ValidStorageOptions extends Shape
{
    /**
     * @param array{
     *     StorageType?: string,
     *     StorageSize?: list<Range>,
     *     ProvisionedIops?: list<Range>,
     *     IopsToStorageRatio?: list<DoubleRange>,
     *     SupportsStorageAutoscaling?: bool,
     *     ProvisionedStorageThroughput?: list<Range>,
     *     StorageThroughputToIopsRatio?: list<DoubleRange>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

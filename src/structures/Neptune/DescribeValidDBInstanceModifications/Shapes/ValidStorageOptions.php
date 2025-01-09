<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeValidDBInstanceModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StorageType
 * @property list<Range> $StorageSize
 * @property list<Range> $ProvisionedIops
 * @property list<DoubleRange> $IopsToStorageRatio
 */
class ValidStorageOptions extends Shape
{
    /**
     * @param array{
     *     StorageType?: string,
     *     StorageSize?: list<Range>,
     *     ProvisionedIops?: list<Range>,
     *     IopsToStorageRatio?: list<DoubleRange>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

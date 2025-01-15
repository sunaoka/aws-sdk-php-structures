<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeValidDBInstanceModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StorageType
 * @property list<Range>|null $StorageSize
 * @property list<Range>|null $ProvisionedIops
 * @property list<DoubleRange>|null $IopsToStorageRatio
 */
class ValidStorageOptions extends Shape
{
    /**
     * @param array{
     *     StorageType?: string|null,
     *     StorageSize?: list<Range>|null,
     *     ProvisionedIops?: list<Range>|null,
     *     IopsToStorageRatio?: list<DoubleRange>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

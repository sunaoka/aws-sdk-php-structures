<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeStorageVirtualMachines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'file-system-id' $Name
 * @property list<string> $Values
 */
class StorageVirtualMachineFilter extends Shape
{
    /**
     * @param array{
     *     Name?: 'file-system-id',
     *     Values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

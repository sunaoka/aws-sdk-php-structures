<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeStorageVirtualMachines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'file-system-id'|null $Name
 * @property list<string>|null $Values
 */
class StorageVirtualMachineFilter extends Shape
{
    /**
     * @param array{
     *     Name?: 'file-system-id'|null,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

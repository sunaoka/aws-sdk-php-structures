<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeStorageVirtualMachinePeers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'file-system-id'|'storage-virtual-machine-id'|null $Name
 * @property list<string>|null $Values
 */
class StorageVirtualMachinePeerFilter extends Shape
{
    /**
     * @param array{
     *     Name?: 'file-system-id'|'storage-virtual-machine-id'|null,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeStorageVirtualMachines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NetBiosName
 * @property SelfManagedActiveDirectoryAttributes $SelfManagedActiveDirectoryConfiguration
 */
class SvmActiveDirectoryConfiguration extends Shape
{
    /**
     * @param array{
     *     NetBiosName?: string,
     *     SelfManagedActiveDirectoryConfiguration?: SelfManagedActiveDirectoryAttributes
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

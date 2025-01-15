<?php

namespace Sunaoka\Aws\Structures\FSx\CreateStorageVirtualMachine\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NetBiosName
 * @property SelfManagedActiveDirectoryAttributes|null $SelfManagedActiveDirectoryConfiguration
 */
class SvmActiveDirectoryConfiguration extends Shape
{
    /**
     * @param array{
     *     NetBiosName?: string|null,
     *     SelfManagedActiveDirectoryConfiguration?: SelfManagedActiveDirectoryAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

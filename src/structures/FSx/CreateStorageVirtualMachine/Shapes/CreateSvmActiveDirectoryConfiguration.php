<?php

namespace Sunaoka\Aws\Structures\FSx\CreateStorageVirtualMachine\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NetBiosName
 * @property SelfManagedActiveDirectoryConfiguration $SelfManagedActiveDirectoryConfiguration
 */
class CreateSvmActiveDirectoryConfiguration extends Shape
{
    /**
     * @param array{
     *     NetBiosName: string,
     *     SelfManagedActiveDirectoryConfiguration?: SelfManagedActiveDirectoryConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

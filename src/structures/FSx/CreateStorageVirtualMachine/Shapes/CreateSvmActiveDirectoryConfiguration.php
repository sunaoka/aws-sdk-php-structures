<?php

namespace Sunaoka\Aws\Structures\FSx\CreateStorageVirtualMachine\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NetBiosName
 * @property SelfManagedActiveDirectoryConfiguration|null $SelfManagedActiveDirectoryConfiguration
 */
class CreateSvmActiveDirectoryConfiguration extends Shape
{
    /**
     * @param array{
     *     NetBiosName: string,
     *     SelfManagedActiveDirectoryConfiguration?: SelfManagedActiveDirectoryConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

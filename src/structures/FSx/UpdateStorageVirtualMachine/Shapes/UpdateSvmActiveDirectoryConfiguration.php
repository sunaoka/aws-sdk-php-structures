<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateStorageVirtualMachine\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SelfManagedActiveDirectoryConfigurationUpdates|null $SelfManagedActiveDirectoryConfiguration
 * @property string|null $NetBiosName
 */
class UpdateSvmActiveDirectoryConfiguration extends Shape
{
    /**
     * @param array{
     *     SelfManagedActiveDirectoryConfiguration?: SelfManagedActiveDirectoryConfigurationUpdates|null,
     *     NetBiosName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

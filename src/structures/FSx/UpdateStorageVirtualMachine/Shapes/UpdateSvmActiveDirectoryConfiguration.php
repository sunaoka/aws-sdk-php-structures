<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateStorageVirtualMachine\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SelfManagedActiveDirectoryConfigurationUpdates $SelfManagedActiveDirectoryConfiguration
 * @property string $NetBiosName
 */
class UpdateSvmActiveDirectoryConfiguration extends Shape
{
    /**
     * @param array{
     *     SelfManagedActiveDirectoryConfiguration?: SelfManagedActiveDirectoryConfigurationUpdates,
     *     NetBiosName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

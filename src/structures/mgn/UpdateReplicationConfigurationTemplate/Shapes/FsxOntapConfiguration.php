<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateReplicationConfigurationTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $storageVirtualMachineId
 * @property string $credentialsSecretArn
 */
class FsxOntapConfiguration extends Shape
{
    /**
     * @param array{
     *     storageVirtualMachineId: string,
     *     credentialsSecretArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

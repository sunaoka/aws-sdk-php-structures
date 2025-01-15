<?php

namespace Sunaoka\Aws\Structures\BackupGateway\ListHypervisors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Host
 * @property string|null $HypervisorArn
 * @property string|null $KmsKeyArn
 * @property string|null $Name
 * @property 'PENDING'|'ONLINE'|'OFFLINE'|'ERROR'|null $State
 */
class Hypervisor extends Shape
{
    /**
     * @param array{
     *     Host?: string|null,
     *     HypervisorArn?: string|null,
     *     KmsKeyArn?: string|null,
     *     Name?: string|null,
     *     State?: 'PENDING'|'ONLINE'|'OFFLINE'|'ERROR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

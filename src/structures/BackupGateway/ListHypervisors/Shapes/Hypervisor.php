<?php

namespace Sunaoka\Aws\Structures\BackupGateway\ListHypervisors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Host
 * @property string $HypervisorArn
 * @property string $KmsKeyArn
 * @property string $Name
 * @property 'PENDING'|'ONLINE'|'OFFLINE'|'ERROR' $State
 */
class Hypervisor extends Shape
{
    /**
     * @param array{
     *     Host?: string,
     *     HypervisorArn?: string,
     *     KmsKeyArn?: string,
     *     Name?: string,
     *     State?: 'PENDING'|'ONLINE'|'OFFLINE'|'ERROR'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

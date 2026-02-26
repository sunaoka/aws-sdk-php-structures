<?php

namespace Sunaoka\Aws\Structures\BackupGateway\ListVirtualMachines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HostName
 * @property string|null $HypervisorId
 * @property string|null $Name
 * @property string|null $Path
 * @property string|null $ResourceArn
 * @property \Aws\Api\DateTimeResult|null $LastBackupDate
 */
class VirtualMachine extends Shape
{
    /**
     * @param array{
     *     HostName?: string|null,
     *     HypervisorId?: string|null,
     *     Name?: string|null,
     *     Path?: string|null,
     *     ResourceArn?: string|null,
     *     LastBackupDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BackupGateway\ListVirtualMachines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HostName
 * @property string $HypervisorId
 * @property \Aws\Api\DateTimeResult $LastBackupDate
 * @property string $Name
 * @property string $Path
 * @property string $ResourceArn
 */
class VirtualMachine extends Shape
{
    /**
     * @param array{
     *     HostName?: string,
     *     HypervisorId?: string,
     *     LastBackupDate?: \Aws\Api\DateTimeResult,
     *     Name?: string,
     *     Path?: string,
     *     ResourceArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BackupGateway\GetVirtualMachine\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HostName
 * @property string|null $HypervisorId
 * @property \Aws\Api\DateTimeResult|null $LastBackupDate
 * @property string|null $Name
 * @property string|null $Path
 * @property string|null $ResourceArn
 * @property list<VmwareTag>|null $VmwareTags
 */
class VirtualMachineDetails extends Shape
{
    /**
     * @param array{
     *     HostName?: string|null,
     *     HypervisorId?: string|null,
     *     LastBackupDate?: \Aws\Api\DateTimeResult|null,
     *     Name?: string|null,
     *     Path?: string|null,
     *     ResourceArn?: string|null,
     *     VmwareTags?: list<VmwareTag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

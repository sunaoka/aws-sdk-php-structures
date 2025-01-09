<?php

namespace Sunaoka\Aws\Structures\BackupGateway\GetVirtualMachine\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HostName
 * @property string $HypervisorId
 * @property \Aws\Api\DateTimeResult $LastBackupDate
 * @property string $Name
 * @property string $Path
 * @property string $ResourceArn
 * @property list<VmwareTag> $VmwareTags
 */
class VirtualMachineDetails extends Shape
{
    /**
     * @param array{
     *     HostName?: string,
     *     HypervisorId?: string,
     *     LastBackupDate?: \Aws\Api\DateTimeResult,
     *     Name?: string,
     *     Path?: string,
     *     ResourceArn?: string,
     *     VmwareTags?: list<VmwareTag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

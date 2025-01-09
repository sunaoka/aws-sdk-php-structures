<?php

namespace Sunaoka\Aws\Structures\Ssm\ListNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AgentType
 * @property string $AgentVersion
 * @property string $ComputerName
 * @property string $InstanceStatus
 * @property string $IpAddress
 * @property 'All'|'Managed'|'Unmanaged' $ManagedStatus
 * @property 'Windows'|'Linux'|'MacOS' $PlatformType
 * @property string $PlatformName
 * @property string $PlatformVersion
 * @property 'ManagedInstance'|'EC2Instance' $ResourceType
 */
class InstanceInfo extends Shape
{
    /**
     * @param array{
     *     AgentType?: string,
     *     AgentVersion?: string,
     *     ComputerName?: string,
     *     InstanceStatus?: string,
     *     IpAddress?: string,
     *     ManagedStatus?: 'All'|'Managed'|'Unmanaged',
     *     PlatformType?: 'Windows'|'Linux'|'MacOS',
     *     PlatformName?: string,
     *     PlatformVersion?: string,
     *     ResourceType?: 'ManagedInstance'|'EC2Instance'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

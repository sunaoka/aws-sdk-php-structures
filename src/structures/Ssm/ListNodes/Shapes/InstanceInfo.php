<?php

namespace Sunaoka\Aws\Structures\Ssm\ListNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AgentType
 * @property string|null $AgentVersion
 * @property string|null $ComputerName
 * @property string|null $InstanceStatus
 * @property string|null $IpAddress
 * @property 'All'|'Managed'|'Unmanaged'|null $ManagedStatus
 * @property 'Windows'|'Linux'|'MacOS'|null $PlatformType
 * @property string|null $PlatformName
 * @property string|null $PlatformVersion
 * @property 'ManagedInstance'|'EC2Instance'|null $ResourceType
 */
class InstanceInfo extends Shape
{
    /**
     * @param array{
     *     AgentType?: string|null,
     *     AgentVersion?: string|null,
     *     ComputerName?: string|null,
     *     InstanceStatus?: string|null,
     *     IpAddress?: string|null,
     *     ManagedStatus?: 'All'|'Managed'|'Unmanaged'|null,
     *     PlatformType?: 'Windows'|'Linux'|'MacOS'|null,
     *     PlatformName?: string|null,
     *     PlatformVersion?: string|null,
     *     ResourceType?: 'ManagedInstance'|'EC2Instance'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

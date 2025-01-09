<?php

namespace Sunaoka\Aws\Structures\GameLift\GetInstanceAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FleetId
 * @property string $InstanceId
 * @property string $IpAddress
 * @property 'WINDOWS_2012'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'WINDOWS_2016'|'AMAZON_LINUX_2023' $OperatingSystem
 * @property InstanceCredentials $Credentials
 */
class InstanceAccess extends Shape
{
    /**
     * @param array{
     *     FleetId?: string,
     *     InstanceId?: string,
     *     IpAddress?: string,
     *     OperatingSystem?: 'WINDOWS_2012'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'WINDOWS_2016'|'AMAZON_LINUX_2023',
     *     Credentials?: InstanceCredentials
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

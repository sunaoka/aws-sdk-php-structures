<?php

namespace Sunaoka\Aws\Structures\GameLift\GetInstanceAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FleetId
 * @property string|null $InstanceId
 * @property string|null $IpAddress
 * @property 'WINDOWS_2012'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'WINDOWS_2016'|'AMAZON_LINUX_2023'|'WINDOWS_2022'|null $OperatingSystem
 * @property InstanceCredentials|null $Credentials
 */
class InstanceAccess extends Shape
{
    /**
     * @param array{
     *     FleetId?: string|null,
     *     InstanceId?: string|null,
     *     IpAddress?: string|null,
     *     OperatingSystem?: 'WINDOWS_2012'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'WINDOWS_2016'|'AMAZON_LINUX_2023'|'WINDOWS_2022'|null,
     *     Credentials?: InstanceCredentials|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

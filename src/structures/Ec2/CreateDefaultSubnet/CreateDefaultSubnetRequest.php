<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateDefaultSubnet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AvailabilityZone
 * @property bool|null $DryRun
 * @property bool|null $Ipv6Native
 * @property string|null $AvailabilityZoneId
 */
class CreateDefaultSubnetRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     DryRun?: bool|null,
     *     Ipv6Native?: bool|null,
     *     AvailabilityZoneId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateDefaultSubnet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AvailabilityZone
 * @property bool|null $DryRun
 * @property bool|null $Ipv6Native
 */
class CreateDefaultSubnetRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZone: string,
     *     DryRun?: bool|null,
     *     Ipv6Native?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

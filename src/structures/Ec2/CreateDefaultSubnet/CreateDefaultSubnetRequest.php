<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateDefaultSubnet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AvailabilityZone
 * @property bool $DryRun
 * @property bool $Ipv6Native
 */
class CreateDefaultSubnetRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZone: string,
     *     DryRun?: bool,
     *     Ipv6Native?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\ProvisionPublicIpv4PoolCidr;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $IpamPoolId
 * @property string $PoolId
 * @property int $NetmaskLength
 * @property string $NetworkBorderGroup
 */
class ProvisionPublicIpv4PoolCidrRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     IpamPoolId: string,
     *     PoolId: string,
     *     NetmaskLength: int,
     *     NetworkBorderGroup?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

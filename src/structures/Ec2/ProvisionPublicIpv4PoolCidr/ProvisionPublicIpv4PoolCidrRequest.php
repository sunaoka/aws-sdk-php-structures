<?php

namespace Sunaoka\Aws\Structures\Ec2\ProvisionPublicIpv4PoolCidr;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamPoolId
 * @property string $PoolId
 * @property int $NetmaskLength
 */
class ProvisionPublicIpv4PoolCidrRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamPoolId: string,
     *     PoolId: string,
     *     NetmaskLength: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

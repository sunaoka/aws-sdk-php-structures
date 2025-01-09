<?php

namespace Sunaoka\Aws\Structures\Ec2\DeprovisionPublicIpv4PoolCidr;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $PoolId
 * @property string $Cidr
 */
class DeprovisionPublicIpv4PoolCidrRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     PoolId: string,
     *     Cidr: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\AllocateIpamPoolCidr;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $IpamPoolId
 * @property string $Cidr
 * @property int $NetmaskLength
 * @property string $ClientToken
 * @property string $Description
 * @property bool $PreviewNextCidr
 * @property list<string> $AllowedCidrs
 * @property list<string> $DisallowedCidrs
 */
class AllocateIpamPoolCidrRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     IpamPoolId: string,
     *     Cidr?: string,
     *     NetmaskLength?: int,
     *     ClientToken?: string,
     *     Description?: string,
     *     PreviewNextCidr?: bool,
     *     AllowedCidrs?: list<string>,
     *     DisallowedCidrs?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

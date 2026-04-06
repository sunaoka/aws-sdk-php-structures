<?php

namespace Sunaoka\Aws\Structures\Ec2\AllocateIpamPoolCidr;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamPoolId
 * @property string|null $Cidr
 * @property int|null $NetmaskLength
 * @property string|null $ClientToken
 * @property string|null $Description
 * @property bool|null $PreviewNextCidr
 * @property list<string>|null $AllowedCidrs
 * @property list<string>|null $DisallowedCidrs
 */
class AllocateIpamPoolCidrRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamPoolId: string,
     *     Cidr?: string|null,
     *     NetmaskLength?: int|null,
     *     ClientToken?: string|null,
     *     Description?: string|null,
     *     PreviewNextCidr?: bool|null,
     *     AllowedCidrs?: list<string>|null,
     *     DisallowedCidrs?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

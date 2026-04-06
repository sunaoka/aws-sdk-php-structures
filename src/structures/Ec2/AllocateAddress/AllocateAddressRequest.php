<?php

namespace Sunaoka\Aws\Structures\Ec2\AllocateAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'vpc'|'standard'|null $Domain
 * @property string|null $Address
 * @property string|null $PublicIpv4Pool
 * @property string|null $NetworkBorderGroup
 * @property string|null $CustomerOwnedIpv4Pool
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $IpamPoolId
 * @property bool|null $DryRun
 */
class AllocateAddressRequest extends Request
{
    /**
     * @param array{
     *     Domain?: 'vpc'|'standard'|null,
     *     Address?: string|null,
     *     PublicIpv4Pool?: string|null,
     *     NetworkBorderGroup?: string|null,
     *     CustomerOwnedIpv4Pool?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     IpamPoolId?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

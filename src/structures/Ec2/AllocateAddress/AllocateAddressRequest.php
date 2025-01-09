<?php

namespace Sunaoka\Aws\Structures\Ec2\AllocateAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'vpc'|'standard' $Domain
 * @property string $Address
 * @property string $PublicIpv4Pool
 * @property string $NetworkBorderGroup
 * @property string $CustomerOwnedIpv4Pool
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property string $IpamPoolId
 * @property bool $DryRun
 */
class AllocateAddressRequest extends Request
{
    /**
     * @param array{
     *     Domain?: 'vpc'|'standard',
     *     Address?: string,
     *     PublicIpv4Pool?: string,
     *     NetworkBorderGroup?: string,
     *     CustomerOwnedIpv4Pool?: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     IpamPoolId?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

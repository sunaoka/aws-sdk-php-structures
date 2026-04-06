<?php

namespace Sunaoka\Aws\Structures\Ec2\AllocateAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'vpc'|'standard'|null $Domain
 * @property string|null $Address
 * @property string|null $PublicIpv4Pool
 * @property string|null $NetworkBorderGroup
 * @property string|null $CustomerOwnedIpv4Pool
 * @property bool|null $DryRun
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
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
     *     DryRun?: bool|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

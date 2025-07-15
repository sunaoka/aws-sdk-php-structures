<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateInstanceConnectEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $SubnetId
 * @property list<string>|null $SecurityGroupIds
 * @property bool|null $PreserveClientIp
 * @property string|null $ClientToken
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property 'ipv4'|'dualstack'|'ipv6'|null $IpAddressType
 */
class CreateInstanceConnectEndpointRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     SubnetId: string,
     *     SecurityGroupIds?: list<string>|null,
     *     PreserveClientIp?: bool|null,
     *     ClientToken?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     IpAddressType?: 'ipv4'|'dualstack'|'ipv6'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

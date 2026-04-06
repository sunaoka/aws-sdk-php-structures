<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpamPrefixListResolver;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamId
 * @property string|null $Description
 * @property 'ipv4'|'ipv6' $AddressFamily
 * @property list<Shapes\IpamPrefixListResolverRuleRequest>|null $Rules
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $ClientToken
 */
class CreateIpamPrefixListResolverRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamId: string,
     *     Description?: string|null,
     *     AddressFamily: 'ipv4'|'ipv6',
     *     Rules?: list<Shapes\IpamPrefixListResolverRuleRequest>|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamPrefixListResolver;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamPrefixListResolverId
 * @property string|null $Description
 * @property list<Shapes\IpamPrefixListResolverRuleRequest>|null $Rules
 */
class ModifyIpamPrefixListResolverRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamPrefixListResolverId: string,
     *     Description?: string|null,
     *     Rules?: list<Shapes\IpamPrefixListResolverRuleRequest>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

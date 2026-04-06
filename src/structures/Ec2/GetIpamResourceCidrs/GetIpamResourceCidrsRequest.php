<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamResourceCidrs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 * @property int<5, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property string $IpamScopeId
 * @property string|null $IpamPoolId
 * @property string|null $ResourceId
 * @property 'vpc'|'subnet'|'eip'|'public-ipv4-pool'|'ipv6-pool'|'eni'|'anycast-ip-list'|null $ResourceType
 * @property Shapes\RequestIpamResourceTag|null $ResourceTag
 * @property string|null $ResourceOwner
 */
class GetIpamResourceCidrsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<5, 1000>|null,
     *     NextToken?: string|null,
     *     IpamScopeId: string,
     *     IpamPoolId?: string|null,
     *     ResourceId?: string|null,
     *     ResourceType?: 'vpc'|'subnet'|'eip'|'public-ipv4-pool'|'ipv6-pool'|'eni'|'anycast-ip-list'|null,
     *     ResourceTag?: Shapes\RequestIpamResourceTag|null,
     *     ResourceOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

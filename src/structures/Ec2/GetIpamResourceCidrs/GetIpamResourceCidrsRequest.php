<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamResourceCidrs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 * @property int<5, 1000> $MaxResults
 * @property string $NextToken
 * @property string $IpamScopeId
 * @property string $IpamPoolId
 * @property string $ResourceId
 * @property 'vpc'|'subnet'|'eip'|'public-ipv4-pool'|'ipv6-pool'|'eni' $ResourceType
 * @property Shapes\RequestIpamResourceTag $ResourceTag
 * @property string $ResourceOwner
 */
class GetIpamResourceCidrsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int<5, 1000>,
     *     NextToken?: string,
     *     IpamScopeId: string,
     *     IpamPoolId?: string,
     *     ResourceId?: string,
     *     ResourceType?: 'vpc'|'subnet'|'eip'|'public-ipv4-pool'|'ipv6-pool'|'eni',
     *     ResourceTag?: Shapes\RequestIpamResourceTag,
     *     ResourceOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamPrefixListResolverVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamPrefixListResolverId
 * @property list<int>|null $IpamPrefixListResolverVersions
 * @property int<5, 1000>|null $MaxResults
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $NextToken
 */
class GetIpamPrefixListResolverVersionsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamPrefixListResolverId: string,
     *     IpamPrefixListResolverVersions?: list<int>|null,
     *     MaxResults?: int<5, 1000>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

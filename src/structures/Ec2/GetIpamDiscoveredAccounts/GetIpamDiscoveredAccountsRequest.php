<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamDiscoveredAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $IpamResourceDiscoveryId
 * @property string $DiscoveryRegion
 * @property list<Shapes\Filter> $Filters
 * @property string $NextToken
 * @property int<5, 1000> $MaxResults
 */
class GetIpamDiscoveredAccountsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     IpamResourceDiscoveryId: string,
     *     DiscoveryRegion: string,
     *     Filters?: list<Shapes\Filter>,
     *     NextToken?: string,
     *     MaxResults?: int<5, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

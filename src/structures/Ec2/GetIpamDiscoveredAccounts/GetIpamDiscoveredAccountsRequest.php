<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamDiscoveredAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamResourceDiscoveryId
 * @property string $DiscoveryRegion
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $NextToken
 * @property int<5, 1000>|null $MaxResults
 */
class GetIpamDiscoveredAccountsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamResourceDiscoveryId: string,
     *     DiscoveryRegion: string,
     *     Filters?: list<Shapes\Filter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<5, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

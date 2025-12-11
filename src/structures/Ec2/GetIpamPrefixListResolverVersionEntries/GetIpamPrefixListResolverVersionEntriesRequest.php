<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamPrefixListResolverVersionEntries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamPrefixListResolverId
 * @property int $IpamPrefixListResolverVersion
 * @property int<5, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class GetIpamPrefixListResolverVersionEntriesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamPrefixListResolverId: string,
     *     IpamPrefixListResolverVersion: int,
     *     MaxResults?: int<5, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

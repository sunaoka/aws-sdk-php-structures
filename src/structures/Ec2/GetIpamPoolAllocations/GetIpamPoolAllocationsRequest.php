<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamPoolAllocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $IpamPoolId
 * @property string $IpamPoolAllocationId
 * @property list<Shapes\Filter> $Filters
 * @property int<1000, 100000> $MaxResults
 * @property string $NextToken
 */
class GetIpamPoolAllocationsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     IpamPoolId: string,
     *     IpamPoolAllocationId?: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int<1000, 100000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

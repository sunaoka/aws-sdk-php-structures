<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamPoolAllocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamPoolId
 * @property string|null $IpamPoolAllocationId
 * @property list<Shapes\Filter>|null $Filters
 * @property int<1000, 100000>|null $MaxResults
 * @property string|null $NextToken
 */
class GetIpamPoolAllocationsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamPoolId: string,
     *     IpamPoolAllocationId?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<1000, 100000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamPoolCidrs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamPoolId
 * @property list<Shapes\Filter>|null $Filters
 * @property int<5, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class GetIpamPoolCidrsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamPoolId: string,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<5, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

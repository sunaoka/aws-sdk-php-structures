<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamPoolCidrs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $IpamPoolId
 * @property list<Shapes\Filter> $Filters
 * @property int<5, 1000> $MaxResults
 * @property string $NextToken
 */
class GetIpamPoolCidrsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     IpamPoolId: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int<5, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

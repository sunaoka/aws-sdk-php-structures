<?php

namespace Sunaoka\Aws\Structures\Ec2\GetAssociatedIpv6PoolCidrs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolId
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 * @property bool $DryRun
 */
class GetAssociatedIpv6PoolCidrsRequest extends Request
{
    /**
     * @param array{
     *     PoolId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\GetAssociatedIpv6PoolCidrs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property bool|null $DryRun
 */
class GetAssociatedIpv6PoolCidrsRequest extends Request
{
    /**
     * @param array{
     *     PoolId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamAddressHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $Cidr
 * @property string $IpamScopeId
 * @property string|null $VpcId
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class GetIpamAddressHistoryRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Cidr: string,
     *     IpamScopeId: string,
     *     VpcId?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

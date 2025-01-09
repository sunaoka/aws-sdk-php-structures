<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamAddressHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $Cidr
 * @property string $IpamScopeId
 * @property string $VpcId
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetIpamAddressHistoryRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     Cidr: string,
     *     IpamScopeId: string,
     *     VpcId?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

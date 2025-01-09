<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayConnectPeers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TransitGatewayConnectPeerIds
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class DescribeTransitGatewayConnectPeersRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayConnectPeerIds?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

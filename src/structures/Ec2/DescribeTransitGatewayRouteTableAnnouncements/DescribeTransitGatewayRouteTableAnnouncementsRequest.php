<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayRouteTableAnnouncements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TransitGatewayRouteTableAnnouncementIds
 * @property list<Shapes\Filter> $Filters
 * @property int<5, 1000> $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class DescribeTransitGatewayRouteTableAnnouncementsRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayRouteTableAnnouncementIds?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int<5, 1000>,
     *     NextToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

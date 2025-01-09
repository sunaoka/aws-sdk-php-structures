<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayRouteTableAnnouncements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TransitGatewayRouteTableAnnouncementIds
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class DescribeTransitGatewayRouteTableAnnouncementsRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayRouteTableAnnouncementIds?: list<string>,
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

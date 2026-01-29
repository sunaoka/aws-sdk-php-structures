<?php

namespace Sunaoka\Aws\Structures\Ec2\SearchTransitGatewayRoutes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayRouteTableId
 * @property list<Shapes\Filter> $Filters
 * @property int<5, 1000>|null $MaxResults
 * @property bool|null $DryRun
 * @property string|null $NextToken
 */
class SearchTransitGatewayRoutesRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayRouteTableId: string,
     *     Filters: list<Shapes\Filter>,
     *     MaxResults?: int<5, 1000>|null,
     *     DryRun?: bool|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\SearchTransitGatewayRoutes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayRouteTableId
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property bool $DryRun
 */
class SearchTransitGatewayRoutesRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayRouteTableId: string,
     *     Filters: list<Shapes\Filter>,
     *     MaxResults?: int,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\SearchLocalGatewayRoutes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocalGatewayRouteTableId
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class SearchLocalGatewayRoutesRequest extends Request
{
    /**
     * @param array{
     *     LocalGatewayRouteTableId: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

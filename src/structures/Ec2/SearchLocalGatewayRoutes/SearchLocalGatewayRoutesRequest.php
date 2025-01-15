<?php

namespace Sunaoka\Aws\Structures\Ec2\SearchLocalGatewayRoutes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocalGatewayRouteTableId
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $DryRun
 */
class SearchLocalGatewayRoutesRequest extends Request
{
    /**
     * @param array{
     *     LocalGatewayRouteTableId: string,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\GetRouteServerRoutingDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RouteServerId
 * @property string|null $NextToken
 * @property int<5, 1000>|null $MaxResults
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 */
class GetRouteServerRoutingDatabaseRequest extends Request
{
    /**
     * @param array{
     *     RouteServerId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<5, 1000>|null,
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

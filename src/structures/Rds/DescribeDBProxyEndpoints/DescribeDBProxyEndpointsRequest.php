<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBProxyEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DBProxyName
 * @property string|null $DBProxyEndpointName
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $Marker
 * @property int<20, 100>|null $MaxRecords
 */
class DescribeDBProxyEndpointsRequest extends Request
{
    /**
     * @param array{
     *     DBProxyName?: string|null,
     *     DBProxyEndpointName?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     Marker?: string|null,
     *     MaxRecords?: int<20, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

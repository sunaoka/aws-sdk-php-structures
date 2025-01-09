<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBProxyEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBProxyName
 * @property string $DBProxyEndpointName
 * @property list<Shapes\Filter> $Filters
 * @property string $Marker
 * @property int<20, 100> $MaxRecords
 */
class DescribeDBProxyEndpointsRequest extends Request
{
    /**
     * @param array{
     *     DBProxyName?: string,
     *     DBProxyEndpointName?: string,
     *     Filters?: list<Shapes\Filter>,
     *     Marker?: string,
     *     MaxRecords?: int<20, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

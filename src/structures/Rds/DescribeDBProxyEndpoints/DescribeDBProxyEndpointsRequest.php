<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBProxyEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBProxyName
 * @property string $DBProxyEndpointName
 * @property list<Shapes\Filter> $Filters
 * @property string $Marker
 * @property int $MaxRecords
 */
class DescribeDBProxyEndpointsRequest extends Request
{
    /**
     * @param array{
     *     DBProxyName?: string,
     *     DBProxyEndpointName?: string,
     *     Filters?: list<Shapes\Filter>,
     *     Marker?: string,
     *     MaxRecords?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

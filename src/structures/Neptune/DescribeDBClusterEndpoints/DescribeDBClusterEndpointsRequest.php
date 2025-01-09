<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeDBClusterEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property string $DBClusterEndpointIdentifier
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeDBClusterEndpointsRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier?: string,
     *     DBClusterEndpointIdentifier?: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

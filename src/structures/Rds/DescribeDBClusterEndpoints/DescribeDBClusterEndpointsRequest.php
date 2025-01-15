<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBClusterEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DBClusterIdentifier
 * @property string|null $DBClusterEndpointIdentifier
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeDBClusterEndpointsRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier?: string|null,
     *     DBClusterEndpointIdentifier?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

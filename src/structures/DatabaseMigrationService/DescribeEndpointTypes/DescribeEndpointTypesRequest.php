<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEndpointTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeEndpointTypesRequest extends Request
{
    /**
     * @param array{
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

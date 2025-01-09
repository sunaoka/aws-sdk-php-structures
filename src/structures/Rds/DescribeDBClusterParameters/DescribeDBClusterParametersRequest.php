<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBClusterParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterParameterGroupName
 * @property string $Source
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeDBClusterParametersRequest extends Request
{
    /**
     * @param array{
     *     DBClusterParameterGroupName: string,
     *     Source?: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

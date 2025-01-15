<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeDBClusterParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterParameterGroupName
 * @property string|null $Source
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeDBClusterParametersRequest extends Request
{
    /**
     * @param array{
     *     DBClusterParameterGroupName: string,
     *     Source?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

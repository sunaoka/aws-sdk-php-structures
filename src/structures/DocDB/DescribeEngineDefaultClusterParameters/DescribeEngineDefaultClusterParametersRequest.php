<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeEngineDefaultClusterParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBParameterGroupFamily
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeEngineDefaultClusterParametersRequest extends Request
{
    /**
     * @param array{
     *     DBParameterGroupFamily: string,
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

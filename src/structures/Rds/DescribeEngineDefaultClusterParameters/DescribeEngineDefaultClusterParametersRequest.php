<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeEngineDefaultClusterParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBParameterGroupFamily
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeEngineDefaultClusterParametersRequest extends Request
{
    /**
     * @param array{
     *     DBParameterGroupFamily: string,
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

<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeDBParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBParameterGroupName
 * @property string $Source
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeDBParametersRequest extends Request
{
    /**
     * @param array{
     *     DBParameterGroupName: string,
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

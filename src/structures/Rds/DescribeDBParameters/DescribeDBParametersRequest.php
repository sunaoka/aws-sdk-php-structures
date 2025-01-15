<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBParameterGroupName
 * @property string|null $Source
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeDBParametersRequest extends Request
{
    /**
     * @param array{
     *     DBParameterGroupName: string,
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

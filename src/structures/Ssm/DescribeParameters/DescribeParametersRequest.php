<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ParametersFilter>|null $Filters
 * @property list<Shapes\ParameterStringFilter>|null $ParameterFilters
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $Shared
 */
class DescribeParametersRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\ParametersFilter>|null,
     *     ParameterFilters?: list<Shapes\ParameterStringFilter>|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null,
     *     Shared?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

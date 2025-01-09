<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ParametersFilter> $Filters
 * @property list<Shapes\ParameterStringFilter> $ParameterFilters
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 * @property bool $Shared
 */
class DescribeParametersRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\ParametersFilter>,
     *     ParameterFilters?: list<Shapes\ParameterStringFilter>,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string,
     *     Shared?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

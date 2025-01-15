<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeActivations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\DescribeActivationsFilter>|null $Filters
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeActivationsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\DescribeActivationsFilter>|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

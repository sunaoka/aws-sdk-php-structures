<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeActivations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\DescribeActivationsFilter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeActivationsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\DescribeActivationsFilter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCoipPools;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $PoolIds
 * @property list<Shapes\Filter> $Filters
 * @property int<5, 1000> $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class DescribeCoipPoolsRequest extends Request
{
    /**
     * @param array{
     *     PoolIds?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int<5, 1000>,
     *     NextToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

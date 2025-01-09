<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSubnets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $Filters
 * @property list<string> $SubnetIds
 * @property string $NextToken
 * @property int<5, 1000> $MaxResults
 * @property bool $DryRun
 */
class DescribeSubnetsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>,
     *     SubnetIds?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int<5, 1000>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

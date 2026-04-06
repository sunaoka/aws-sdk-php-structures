<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSubnets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property list<string>|null $SubnetIds
 * @property string|null $NextToken
 * @property int<5, 1000>|null $MaxResults
 * @property bool|null $DryRun
 */
class DescribeSubnetsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     SubnetIds?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<5, 1000>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

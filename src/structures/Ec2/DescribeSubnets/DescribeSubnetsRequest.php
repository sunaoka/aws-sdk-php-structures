<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSubnets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property list<string>|null $SubnetIds
 * @property bool|null $DryRun
 * @property string|null $NextToken
 * @property int<5, 1000>|null $MaxResults
 */
class DescribeSubnetsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     SubnetIds?: list<string>|null,
     *     DryRun?: bool|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<5, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

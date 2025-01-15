<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property list<string>|null $VpcIds
 * @property string|null $NextToken
 * @property int<5, 1000>|null $MaxResults
 * @property bool|null $DryRun
 */
class DescribeVpcsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     VpcIds?: list<string>|null,
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

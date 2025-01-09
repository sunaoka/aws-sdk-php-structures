<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $Filters
 * @property list<string> $VpcIds
 * @property string $NextToken
 * @property int $MaxResults
 * @property bool $DryRun
 */
class DescribeVpcsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>,
     *     VpcIds?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

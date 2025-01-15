<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClassicLinkInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string>|null $InstanceIds
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $NextToken
 * @property int<5, 1000>|null $MaxResults
 */
class DescribeClassicLinkInstancesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     InstanceIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<5, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

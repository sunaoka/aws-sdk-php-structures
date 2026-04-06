<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClassicLinkInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $DryRun
 * @property list<string>|null $InstanceIds
 * @property int<5, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeClassicLinkInstancesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     DryRun?: bool|null,
     *     InstanceIds?: list<string>|null,
     *     MaxResults?: int<5, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

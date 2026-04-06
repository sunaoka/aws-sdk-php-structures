<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $InstanceIds
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $NextToken
 * @property int|null $MaxResults
 */
class DescribeInstancesRequest extends Request
{
    /**
     * @param array{
     *     InstanceIds?: list<string>|null,
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

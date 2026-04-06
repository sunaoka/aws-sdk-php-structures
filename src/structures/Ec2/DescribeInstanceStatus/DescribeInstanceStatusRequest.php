<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property list<string>|null $InstanceIds
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $DryRun
 * @property bool|null $IncludeAllInstances
 */
class DescribeInstanceStatusRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     InstanceIds?: list<string>|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     DryRun?: bool|null,
     *     IncludeAllInstances?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

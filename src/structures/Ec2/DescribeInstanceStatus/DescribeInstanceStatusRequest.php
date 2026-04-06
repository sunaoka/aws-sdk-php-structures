<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $InstanceIds
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $IncludeAllInstances
 */
class DescribeInstanceStatusRequest extends Request
{
    /**
     * @param array{
     *     InstanceIds?: list<string>|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     IncludeAllInstances?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

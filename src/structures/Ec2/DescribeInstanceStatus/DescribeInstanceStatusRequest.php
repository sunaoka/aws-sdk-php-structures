<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $InstanceIds
 * @property int $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 * @property bool $IncludeAllInstances
 */
class DescribeInstanceStatusRequest extends Request
{
    /**
     * @param array{
     *     InstanceIds?: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>,
     *     IncludeAllInstances?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

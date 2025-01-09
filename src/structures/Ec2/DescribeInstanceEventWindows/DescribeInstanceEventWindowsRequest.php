<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceEventWindows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<string> $InstanceEventWindowIds
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeInstanceEventWindowsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     InstanceEventWindowIds?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

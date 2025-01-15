<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceEventWindows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string>|null $InstanceEventWindowIds
 * @property list<Shapes\Filter>|null $Filters
 * @property int<20, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeInstanceEventWindowsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     InstanceEventWindowIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<20, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
